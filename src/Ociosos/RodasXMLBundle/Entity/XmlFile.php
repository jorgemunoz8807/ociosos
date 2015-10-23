<?php
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 7/13/14
 * Time: 12:45 AM
 */

namespace Ociosos\RodasXMLBundle\Entity;

use Symfony\Component\HttpFoundation\File\File;

class XmlFile
{	
    protected $xmlFile;

    public function setXmlFile(File $file = null)
    {
        $this->xmlFile = $file;
    }

    public function getXmlFile()
    {
        return $this->xmlFile;
    }

} 