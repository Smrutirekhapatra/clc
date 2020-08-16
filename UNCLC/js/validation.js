function validation()
{
	var name=document.getElementById("name").value;
	var clas=document.getElementById("clas").value;
	var clgroll=document.getElementById("clgroll").value;
	var proll=document.getElementById("proll").value;
	var pf=document.getElementById("pf").value;
	var year=document.getElementById("year").value;
	var subject=document.getElementById("subject").value;
	var tname=/^[a-zA-Z. ]{3,}$/;
	var tclas=/^[a-zA-Z0-9+ ]{3,}$/;
	var tclgroll=/^[a-zA-Z0-9- ]{1,}$/;
	var tproll=/^[a-zA-Z0-9- ]{3,}$/;
	var tpf=/^[a-zA-Z ]{4,}$/;
	var tyear=/^[A-Za-z0-9 ]{4,}$/;
	var tsubject=/^[a-zA-Z- ]{3,}$/;

	if(tname.test(name))
	{
		document.getElementById("sname").innerHTML="";
	}
	else
	{
		document.getElementById("sname").innerHTML="**Invalid Name**";
		return false;

	}
	if(tclas.test(clas))
	{
		document.getElementById("sclas").innerHTML="";
	}
	else
	{
		document.getElementById("sclas").innerHTML="**Invalid Class Name**";
		return false;

	}
	if(tclgroll.test(clgroll))
	{
		document.getElementById("sclgroll").innerHTML="";
	}
	else
	{
		document.getElementById("sclgroll").innerHTML="**Invalid Roll No.**";
		return false;

	}
	if(tproll.test(proll))
	{
		document.getElementById("sproll").innerHTML="";
	}
	else
	{
		document.getElementById("sproll").innerHTML="**Invalid Roll No.**";
		return false;

	}
	if(tpf.test(pf))
	{
		document.getElementById("spf").innerHTML="";
	}
	else
	{
		document.getElementById("spf").innerHTML="**Invalid Input**";
		return false;

	}
	if(tyear.test(year))
	{
		document.getElementById("syear").innerHTML="";
	}
	else
	{
		document.getElementById("syear").innerHTML="**Invalid Year**";
		return false;

	}
	
	if(tsubject.test(subject))
	{
		document.getElementById("ssubject").innerHTML="";
	}
	else
	{
		document.getElementById("ssubject").innerHTML="**Invalid Subject Name**";
		return false;

	}
	

}

