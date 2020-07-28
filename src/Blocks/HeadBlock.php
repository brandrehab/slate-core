<?php

declare(strict_types=1);

namespace Slate\Blocks;

/**
 * Head block data.
 */
class HeadBlock extends Block
{
    /**
     * {@inheritdoc}
     */
    public function build(): array
    {
        $manifest = json_decode(file_get_contents(base_path('public/assets/admin/manifest.json')), true);
        $files = config('manifest')['admin'];

        return [
          'css' => $this->getVersionedFiles($files['css'], $manifest),
          'js' => $this->getVersionedFiles($files['js'], $manifest),
          'name' => 'Head block',
        ];
    }

    /**
     * Get specified files from the manifest with versioning.
     */
    private function getVersionedFiles($files, $manifest): array
    {
        $versioned = [];
        foreach ($files as $file) {
            if (array_key_exists($file, $manifest)) {
                $versioned[] = $manifest[$file];
            }
        }
        return $versioned;
    }
}
