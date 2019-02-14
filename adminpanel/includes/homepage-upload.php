<?php

    include '../page_secure.php';

    if (isset($_POST['submit'])) {
      $newfilename = "name";

  $conn = mysqli_connect("localhost","root","","moontower_admins");
      $file = $_FILES['file'];
      $deletename=mysqli_real_escape_string($conn,$_POST['deleteval']);

      $filename = $file["name"];
      $fileType = $file["type"];
      $fileTempName = $file["tmp_name"];
      $fileError = $file["error"];
      $fileSize = $file["size"];

      $fileExt = explode(".", $filename);
      $fileRealExt = strtolower(end($fileExt));

      $rowfit=mysqli_real_escape_string($conn,$_POST['determiner']);

      $allowed = array("jpg","jpeg","png","JPG");

        if (in_array($fileRealExt,$allowed)) {
           $imageFullName = $newfilename . "." . uniqid("", true) . "." . $fileRealExt;
           $imgdestination="../image-for-homepage/". $imageFullName;
           $path="../image-for-homepage/". $deletename;
          $sql = "select * from  `home-images-homepage`";
          $result = mysqli_query($conn, $sql);
          $resultcheck = mysqli_num_rows($result);

          if ($resultcheck > 0){



            switch($rowfit){
              case "bg-img":
                      unlink($path);
                    $sql1 = "update `home-images-homepage` set `background-1`= '$imageFullName'";
                    mysqli_query($conn,$sql1);
                    move_uploaded_file($fileTempName,$imgdestination);

                    break;
              case "room1":
              unlink($path);
                    $sql1 = "update `home-images-homepage` set `room-1`= '$imageFullName'";
                    mysqli_query($conn,$sql1);
                    move_uploaded_file($fileTempName,$imgdestination);
                    break;
              case 'room2':
                      // code...
                      unlink($path);
                      $sql1 = "update `home-images-homepage` set `room-2`= '$imageFullName'";
                      mysqli_query($conn,$sql1);
                      move_uploaded_file($fileTempName,$imgdestination);
                      break;
              case 'room3':
              unlink($path);
                        $sql1 = "update `home-images-homepage` set `room-3`= '$imageFullName'";
                        mysqli_query($conn,$sql1);
                        move_uploaded_file($fileTempName,$imgdestination);
                break;

                case 'room4':
                unlink($path);
                          $sql1 = "update `home-images-homepage` set `room-4`= '$imageFullName'";
                          mysqli_query($conn,$sql1);
                          move_uploaded_file($fileTempName,$imgdestination);
                  break;
                case 'barimg':
                unlink($path);
                        $sql1 = "update `home-images-homepage` set `bar`= '$imageFullName'";
                        mysqli_query($conn,$sql1);
                        move_uploaded_file($fileTempName,$imgdestination);
                    break;

                case 'food1':
                unlink($path);
                $sql1 = "update `home-images-homepage` set `food-1`= '$imageFullName'";
                mysqli_query($conn,$sql1);
                move_uploaded_file($fileTempName,$imgdestination);
                  break;

                  case 'food2':
                  unlink($path);
                  $sql1 = "update `home-images-homepage` set `food-2`= '$imageFullName'";
                  mysqli_query($conn,$sql1);
                  move_uploaded_file($fileTempName,$imgdestination);
                    break;

                    case 'food3':
                    unlink($path);
                    $sql1 = "update `home-images-homepage` set `food-3`= '$imageFullName'";
                    mysqli_query($conn,$sql1);
                    move_uploaded_file($fileTempName,$imgdestination);
                      break;

                      case 'food4':
                      unlink($path);
                      $sql1 = "update `home-images-homepage` set `food-4`= '$imageFullName'";
                      mysqli_query($conn,$sql1);
                      move_uploaded_file($fileTempName,$imgdestination);
                        break;

                        case 'resturant':
                        unlink($path);
                        $sql1 = "update `home-images-homepage` set `resturant`= '$imageFullName'";
                        mysqli_query($conn,$sql1);
                        move_uploaded_file($fileTempName,$imgdestination);
                          break;


            }
header('Location:../homemanage.php?upload=success');
          }else {
            echo "not possible to do so contact the administrator";
          }

        }

    }
 
