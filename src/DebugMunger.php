<?php
namespace Digraph\Modules\digraph_debug_module;

use Flatrr\Config\Config;

class DebugMunger extends \Digraph\Mungers\AbstractMunger
{
    protected function dump_text_html($package)
    {
        echo "<div id='digraph-debug-dump'>";
        echo "<hr>";
        echo "<h1>Debug dump from digraph_debug_module</h1>";
        echo "<p>The following is being produced after normal execution by the digraph_debug_module. This module should <strong>never</strong> be used in production.</p>";
        echo "<h2>Package contents</h2>";
        $p = new Config($package->get());
        $p['response.content'] = '[trimmed for output]';
        echo "<pre>".htmlentities(print_r($p->yaml(), true))."</pre>";
        echo "<h2>Package log</h2>";
        echo "<pre>".htmlentities(implode(PHP_EOL, $package->log()))."</pre>";
        echo "<h3>CMS log</h3>";
        echo "<pre>".htmlentities(implode(PHP_EOL, $package->cms()->log()))."</pre>";
        echo "<h1>CMS configuration as YAML</h1>";
        echo "<pre>".htmlentities($package->cms()->config->yaml())."</pre>";
        echo "</div>";
    }

    protected function doMunge($package)
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
