
<?php 
  // The location of the PDF file 
  // on the server 
  // $filename = "uploads/".$en_name.".pdf"; 
  $filename = "https://dt.rspantiwaluyo.com/jdih/".$en_name.".pdf"; 
    // echo $filename;
   // Header content type 
   $file = get_headers($filename, TRUE);
  header("Content-type: application/pdf"); 
    // header("Content-title: ".$filename);
  header('Content-Transfer-Encoding: binary');
  header("Content-Length: " . $file['Content-Length']); 
    
  // Send the file to the browser. 
  readfile($filename);
  ?>  
  <html>
      <head>
          <style>
             #outerContainer #mainContainer div.toolbar 
            {
            display: none !important; /* hide PDF viewer toolbar */
            }
             #outerContainer #mainContainer #viewerContainer 
            {
              top: 0 !important; /* move doc up into empty bar space */
            }
          </style>
          <body>
              Ora ke load
          </body>
      </head>
  </html>
  