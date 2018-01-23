<?php
    require 'app/start.php';
    use Kunnu\Dropbox\DropboxFile;
    // $pathToLocalFile = __DIR__ . "/Hello-World.txt";
    //
    // $dropboxFile = new DropboxFile($pathToLocalFile);
    // $download_path = __DIR__ . "/downloaded/myDownloadedFile.txt";
    // //Download and the save the file at the given path
    // $file = $dropbox->download("/My-Hello-World2.txt", $download_path);
    //
    // //Downloaded File Metadata
    // $metadata = $file->getMetadata();
    //
    // //Name
    // echo $metadata->getName();

    //create folder
    //$dropbox->createFolder('/Testing');

    $file = $dropbox->listFolder('/Testing');
    //Fetch Items
    $items = $file->getItems();

    $myFiles = array();
    $items->each(function ($item, $key) {
        global $myFiles;
        $myFiles[] = $item->name;
    });
    //print_r($myFiles);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div class="">
       <?php
         foreach($myFiles as $val){
           echo '<input type="radio" value=" '.$val.' " name="files"> '. $val . "</br>";
         }
       ?>
        <ul>
          <?php
            foreach($myFiles as $val){
              echo "<li> $val </li>";
            }
          ?>
        </ul>
     </div>
   </body>
 </html>
