var showpass=document.getElementById('show');
var pass=document.getElementById('pass');
showpass.addEventListener('click',()=>
{
if(pass.type==='password')
{
    pass.type='text';
    showpass.src="eyeopenN.png";
}
else
{
    pass.type='password';
    showpass.src="eyecloseN.png";
}
});
