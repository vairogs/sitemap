<?php declare(strict_types = 1);

namespace Vairogs\Sitemap\Builder;

use function fwrite;

class FileBuilder extends AbstractBuilder
{
    public function getType(): string
    {
        return 'resource';
    }

    /** @noinspection PhpParameterByRefIsNotUsedAsReferenceInspection */
    protected function write(&$buffer, string $text): void
    {
        fwrite(stream: $buffer, data: $text);
    }
}
