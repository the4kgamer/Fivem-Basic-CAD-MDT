# Fivem-Basic-CAD-MDT
this was a cadmdt system I made when I was starting out coding, this was the first thing I made, pretty much downloaded a login website with PHP and used sheer logic to add features :) I am a just going to be uploading everything I do on here now.

I really advise against usage of this as it is not finished and I have no intentions to ever complete it :)

# Current Features

* CIVs can register weapons and vehicles

* Admins can delete users, lacking verification tools when going into admin pages, easy to add. Just add:



```
if($_SESSION['usr_role'] != "administrator") {
    header("Location: dashboard.php");
}
```

## test account:
### admin

Username: admin

Password: test

email: admin@gmail.com


* Dispatch can look up vehicles by their plate

and some more, I cannot quite remember.
I understand it seems like a lack of features, but it was very experemental. Similar concept to my prev PHP repo, just for viewing, would rather no one use, but as if anyone would use it ¯\_(ツ)_/¯ 
Don't mind my spelling. I know it seems unprofessional but I was tired af while writing this, may fix later, doesn't really matter...

## extra little notes..

Like I said, this was the first thing I ever coded, so there were a lot of unnessasairy files/features, very bad efficiancy, but aye, most people my age getting started with coding, make a simple Python console application, like adding numbers and such, to learn coding, so don't be so hard on me XD
