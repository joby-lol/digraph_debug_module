<?php
namespace Digraph\Modules\digraph_debug_module;

class DebugMunger extends \Digraph\Mungers\AbstractMunger
{
    protected function dump_text_html(&$package)
    {
        echo "<hr>";
        echo "<h1>Debug dump from digraph_debug_module</h1>";
        echo "<p>The following is being produced after normal execution by the digraph_debug_module. This module should <strong>never</strong> be used in production.</p>";
        echo "<h2>Package contents</h2>";
        var_dump($package->get());
        echo "<h2>Package log</h2>";
        var_dump($package->log());
        echo "<h3>CMS log</h3>";
        var_dump($package->cms()->log());
        echo "<h1>CMS configuration as YAML</h1>";
        echo "<pre>".$package->cms()->config->yaml()."</pre>";
    }

    protected function doMunge(&$package)
    {
        $mime = $package['response.mime'];
        $fn = 'dump_'.preg_replace('/[^a-z]+/', '_', $mime);
        if (method_exists($this, $fn)) {
            $this->$fn($package);
        }
    }

    protected function doConstruct($name)
    {
    }
}
