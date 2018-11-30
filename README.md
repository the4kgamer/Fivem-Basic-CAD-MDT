# Fivem-Basic-CAD-MDT
this was a cadmdt system I made when I was starting out coding, this was the first thing I made, pretty much downloaded a login website with PHP and used sheer logic to add features :) I am a just going to be uploading everything I do on here now.

I really advise against usage of this as it is not finished and I have no intentions to ever complete it :)

# Current Features

* CIVs can register weapons and vehicles

* Admins can delete users, lacking verification tools when going into admin pages, easy to add. Just add:

```
include_once 'dbconnect.php';
$role = mysqli_real_escape_string($con, $_SESSION['usr_role']);

if($role != "administrator") {
    header("Location: dashboard.php");
}
```




* Dispatch can look up vehicles by their plate

and some more, I cannot quite remember.
I understand it seems like a lack of features, but it was very experemental. Similar concept to my prev PHP repo, just for viewing, would rather no one use, but as if anyone would use it ¯\_(ツ)_/¯ 
Don't mind my spelling. I know it seems unprofessional but I was tired af while writing this, may fix later, doesn't really matter...

