<?php

namespace Kunnu\Dropbox\Models;

class ModelFactory
{

    /**
     * Make a Model Factory
     *
     * @param  array $data Model Data
     *
     * @return \Kunnu\Dropbox\Models\ModelInterface
     */
    public static function make(array $data = array())
    {
        if (static::isFileOrFolder($data)) {
            $tag = $data['.tag'];

            //File
            if (static::isFile($tag)) {
                return new FileMetadata($data);
            }

            //Folder
            if (static::isFolder($tag)) {
                return new FolderMetadata($data);
            }
        }

        //Temporary Link
        if (static::isTemporaryLink($data)) {
            return new TemporaryLink($data);
        }

        //List
        if (static::isList($data)) {
            return new MetadataCollection($data);
        }

        //Search Results
        if (static::isSearchResult($data)) {
            return new SearchResults($data);
        }

        //Deleted File/Folder
        if (static::isDeletedFileOrFolder($data)) {
            return new DeletedMetadata($data);
        }

        //Base Model
        return new BaseModel($data);
    }

    /**
     * @param array $data
     *
     * @return bool
     */
    protected static function isFileOrFolder(array $data)
    {
        return isset($data['.tag']) && isset($data['id']);
    }

    /**
     * @param string $tag
     *
     * @return bool
     */
    protected static function isFile($tag)
    {
        return $tag === 'file';
    }

    /**
     * @param string $tag
     *
     * @return bool
     */
    protected static function isFolder($tag)
    {
        return $tag === 'folder';
    }

    /**
     * @param array $data
     *
     * @return bool
     */
    protected static function isTemporaryLink(array $data)
    {
        return isset($data['metadata']) && isset($data['link']);
    }

    /**
     * @param array $data
     *
     * @return bool
     */
    protected static function isList(array $data)
    {
        return isset($data['entries']);
    }

    /**
     * @param array $data
     *
     * @return bool
     */
    protected static function isSearchResult(array $data)
    {
        return isset($data['matches']);
    }

    /**
     * @param array $data
     *
     * @return bool
     */
    protected static function isDeletedFileOrFolder(array $data)
    {
        return !isset($data['.tag']) || !isset($data['id']);
    }
}
