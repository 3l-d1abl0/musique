function validate()
{
 var x=document.forms["form1"]["name"].value;
 var i=0;
 var count=0;
 var y=32;
 for(i=0;i<x.length;i++)
 {
	if(x[i]==(char)y)
	count++;
 }
 if(count==x.length)
 {
 alert("enter name");
 return false;}
 else
 return true;
}