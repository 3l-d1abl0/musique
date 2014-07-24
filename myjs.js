function validateForm1()
{	
var x=document.forms["form1"]["name"].value;
if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }
  else
  return true;
}
function validateForm2()
{
var y=document.forms["form1"]["pass"].value; 
if (y==null || y=="")
 {
  alert("Enter your password");
  return false;
 }
 else
 return true;
}
function validateForm3()
{
var z=document.forms["form1"]["address"].value; 
if (z==null || z=="")
 {
  alert("Enter your address");
  return false;
 }
 else
 return true;
}
function validateForm4()
{
var c=document.forms["form1"]["city"].value;
if(c==null || c=="")
{
	alert("Enter the city name");
	return false;
}
else
return true;
}
function validateForm5()
{
	var flag = 0;
var p=document.forms["form1"]["pincode"].value;
if(p==null || p=="")
{
	alert("Enter the pincode");
	flag=1;
}
if(p.length!=6)
{
	alert("Enter 6 characters");
	flag=1;
}
  if(flag==1)
   {
	  return false;
   }
   if(flag==0)
   {
	   return true;
   }
}
function validateForm6()
{
  var flag = -1;
  var ph = document.forms["form1"]["phone"].value;
   if (ph==null || ph=="")
   {
     alert("Phone no. cannot be left blank");
      flag=1;
 	 }       
    else
	flag=0;
    if(isNaN(ph)|| ph.indexOf(" ")!=-1)
	{
        alert("Enter numeric value");
         flag=1;
     }
	 else
	 flag=0;
     if (ph.length!=10)
	{
       alert("enter 10 characters"); 
	   flag=1;
     }
	 else
	 flag=0;
   if(flag==1)
   {
	  return false;
   }
   else if(flag==0)
   {
	   return true;
   }
}
function validateForm7()
{
   var flg = -1;
   var e=document.forms["form1"]["email"].value;
   var atpos=e.indexOf("@");
   var dotpos=e.lastIndexOf(".");
   if(e==null || e=="")
	{
        alert("Enter email");
         flg=1;
     }
	else
	flg=0; 
   if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
    {
    alert("Not a valid e-mail address");
    flg = 1;
    }
	else
	flg=0;
	if(flg==1)
   {
	  return false;
   }
   else if(flg==0)
   {
	   return true;
   }
}
function validateForm()
{
	var n=document.forms["form1"]["name"].value;
	var p=document.forms["form1"]["pass"].value;
	var a=document.forms["form1"]["address"].value;
	var c=document.forms["form1"]["city"].value;
	var p=document.forms["form1"]["pincode"].value;
	var ph=document.forms["form1"]["phone"].value;
	var e=document.forms["form1"]["email"].value;
	if((n==null || n=="" )||(p==null || p=="")||(a==null || a=="")||(c==null || c=="")||(p==null || p=="")||(ph==null || ph=="")||(e==null || e==""))
	{
		alert("form not filled properly");
		return false;
	}
	else
	return true;
}