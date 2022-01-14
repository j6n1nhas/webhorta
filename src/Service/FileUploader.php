<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

// Classe definida para gravar os ficheiros com imagens dos produtos
class FileUploader
{
    private $targetDirectory;
    private $slugger;

    public function __construct($targetDirectory, SluggerInterface $slugger)
    {
        $this->targetDirectory = $targetDirectory;
        $this->slugger = $slugger;
    }

    public function upload(UploadedFile $file, $nome)
    {
        $safeFilename = $this->slugger->slug($nome);
        $filename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
        try
        {
            $dir_handle = opendir($this->getTargetDirectory());
            while(false !== ($entry = readdir($dir_handle)))
            {
                $fname = pathinfo($entry, PATHINFO_FILENAME);
                if(str_contains($fname, $safeFilename))
                    unlink($this->getTargetDirectory().'/'.$entry);
            }
            $file->move($this->getTargetDirectory(), $filename);
        }
        catch(FileException $e)
        {
        }
        return $filename;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}