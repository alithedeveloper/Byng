<?php

/**
 * @param $object
 * @return string
 */
function addFilteredClass ($object)
{
    if ($object->type == 'youtube')
    {
       return 'article-youtube';
    }
    else if($object->type == 'rss')
    {
       return 'article-rss';
    }
    else if ($object->type == 'article')
    {
        return 'article-simple';
    }
    else{
        return 'article-vimeo';
    }
}