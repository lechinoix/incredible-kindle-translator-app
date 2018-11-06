<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

Class FileUploader
    {
        private $targetDirectory;

        public function __construct($targetDirectory)
            {
            $this->targetDirectory = $targetDirectory;
            }

        public function upload(UploadedFile $file)
            {
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            try
                {
                $file->move($this->getTargetDir(), $fileName);
                } catch (FileException $e) {
                // ... handle exception if something happens during file upload
                }

            return $fileName;

            }

        public function getTargetDirectory()
            {
            return $this->targetDirectory;
            }
    }

