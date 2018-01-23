<?php
  require 'app/start.php';
  use Kunnu\Dropbox\DropboxFile;
  $pathToLocalFile = __DIR__ . "/Hello-World.txt";

  $dropboxFile = new DropboxFile($pathToLocalFile);

  //Uploaded File
  $file = $dropbox->upload($dropboxFile, "/Testing/MyFile2.txt", ['autorename' => true]);
  echo "<pre>";
  print_r($file);
  echo "</pre>";

  echo $file->getName();

  echo "<a href='downloadFile.php'>Download FIle</a>";


 ?>
