<?php

namespace YOOtheme\Builder\Source;

use GraphQL\Error\SyntaxError;
use YOOtheme\Builder\Source;
use YOOtheme\Config;
use YOOtheme\GraphQL\SchemaPrinter;
use YOOtheme\Http\Request;

class SourceListener
{
    public static function initSource(Config $config, Request $request, $source)
    {
        try {

            $dir = $config('image.cacheDir');
            $file = "{$dir}/schema-{$config('source.id')}.gql";

            if ($config('app.isSite') && !$request->getAttribute('customizer') && is_file($file) && filectime($file) > filectime(__FILE__)) {

                // load schema from cache
                $hash = hash('crc32b', $file);
                $source->setSchema($source->loadSchema($file, "{$dir}/schema-{$hash}.php"));

                // stop event
                return false;
            }

        // delete invalid schema cache
        } catch (SyntaxError $e) {
            unlink($file);
        }
    }

    public static function initCustomizer(Config $config, Source $source)
    {
        $dir = $config('image.cacheDir');
        $file = "{$dir}/schema-{$config('source.id')}.gql";
        $result = $source->queryIntrospection()->toArray();
        $content = SchemaPrinter::doPrint($source->getSchema());

        // update schema cache
        if (isset($result['data'])) {
            file_put_contents($file, $content);
        } elseif (is_file($file)) {
            unlink($file);
        }

        $config->add('customizer.schema', isset($result['data']) ? $result['data']['__schema'] : $result);
    }
}
