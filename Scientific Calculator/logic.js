let screen=document.getElementById('display');
buttons=document.querySelectorAll('button');
let dispVal="";
for(btn of buttons)
{
    btn.addEventListener('click',(e)=>{
        btnTxt= e.target.innerText;
        console.log(btnTxt);
        if(btnTxt=='x')
        {
            btnTxt="*";
            // dispVal+=btnTxt;
            screen.value=dispVal;
            console.log(btnTxt);
         }
        if(btnTxt=='x y')
        {
            btnTxt="**";
            // dispVal+=btnTxt;
            screen.value=dispVal;
         }
        if(btnTxt=='÷')
        {
            btnTxt="/";
            dispVal+=btnTxt;
            screen.value=dispVal;
         }
        else if(btnTxt=='sin')
        {
            dispVal=Math.sin(screen.value);
           screen.value=dispVal;
        }
        else if(btnTxt=='%')
        {
            dispVal=screen.value/100;
           screen.value=dispVal;
        }
        else if(btnTxt=='tan')
        {
            dispVal=Math.tan(screen.value);
           screen.value=dispVal;
        }
        else if(btnTxt=='cos')
        {
            dispVal=Math.cos(screen.value);
           screen.value=dispVal;
        }
        
        else if(btnTxt=='log')
        {
            dispVal=Math.log10(screen.value);
            screen.value=dispVal;
        }
        else if(btnTxt=='ln')
        {
            dispVal=Math.log(screen.value);
            screen.value=dispVal;
        }
        else if(btnTxt=='sqrt')
        {
            dispVal=Math.sqrt(screen.value);
            screen.value=dispVal;
        }
        else if(btnTxt=='π')
        {
            dispVal+=Math.PI;
            screen.value=dispVal;
        }
        else if(btnTxt=='x!')
        {
            let i=1,n=screen.value;
            while(n!=0)
            {
               i*=n;
               n--;
            }
            dispVal=i;
            screen.value=dispVal;
        }
        else if(btnTxt=='x -1')
        {
            dispVal= 1/screen.value ;
            screen.value=dispVal;
        }
        else if(btnTxt=='x 2')
        {
            dispVal= Math.pow(screen.value,2) ;
            screen.value=dispVal;
        }
        
        else if(btnTxt=='x 3')
        {
            dispVal= Math.pow(screen.value,3) ;
            screen.value=dispVal;
        }
        else if(btnTxt=='x 1/3')
        {
            dispVal= Math.pow(screen.value,1/3) ;
            screen.value=dispVal;
        }
        else if(btnTxt=='x 1/4')
        {
            dispVal= Math.pow(screen.value,1/4) ;
            screen.value=dispVal;
        }
        
        else if(btnTxt=='e')
        {
            dispVal+=Math.E;
           screen.value=dispVal;
        }
        else if(btnTxt=='AC')
        {
           screen.value="";
           dispVal="";
        }
        else if(btnTxt=="=")
        {
          screen.value= eval(dispVal);
        //   dispVal="";
        }
        else{
            dispVal+=btnTxt;
            screen.value=dispVal;
        }

    })
}