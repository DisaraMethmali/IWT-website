function loadData(name )
{
    if( name == "btnl1" )
    {
        document.getElementById( "para" ).innerHTML = "The history of iPhone began with a request from Apple Inc. CEO Steve Jobs to the company engineers, asking them to investigate the use of touchscreen devices and tablet computers (which later came to fruition with the iPad).[1][2][3][4] Many have noted the device similarities to Apple previous touch-screen portable device, the Newton MessagePad.[5][6][7][8] Like the MessagePad, the iPhone is nearly all screen. Its form factor is credited to Apple Chief Design Officer, Jonathan Ive.[3][9] The iPhone beta however was created in 2004 to test its ability towards commands of the Apple team and was called the first iPhone ever but was never released to the public so it was not considered as the main first iPhone";
        
        document.getElementById("image1").src = "..images/iphoneXS.jpg";
        
    }
    else if(name == "btnl2")
    {
        document.getElementById( "para" ).innerHTML = "The history of iPhone began with a request from Apple Inc. CEO Steve Jobs to the company engineers, asking them to investigate the use of touchscreen devices and tablet computers (which later came to fruition with the iPad).[1][2][3][4] Many have noted the device similarities to Apple previous touch-screen portable device, the Newton MessagePad.[5][6][7][8] Like the MessagePad, the iPhone is nearly all screen. Its form factor is credited to Apple Chief Design Officer, Jonathan Ive.[3][9] The iPhone beta however was created in 2004 to test its ability towards commands of the Apple team and was called the first iPhone ever but was never released to the public so it was not considered as the main first iPhone.";
        
        document.getElementById("image1").src = "..images/iphoneXSmax.jpg";
        
    }
    else if(name == "btnl3")
    {
        document.getElementById( "para" ).innerHTML = "The history of iPhone began with a request from Apple Inc. CEO Steve Jobs to the company engineers, asking them to investigate the use of touchscreen devices and tablet computers (which later came to fruition with the iPad).[1][2][3][4] Many have noted the device similarities to Apple previous touch-screen portable device, the Newton MessagePad.[5][6][7][8] Like the MessagePad, the iPhone is nearly all screen. Its form factor is credited to Apple Chief Design Officer, Jonathan Ive.[3][9] The iPhone beta however was created in 2004 to test its ability towards commands of the Apple team and was called the first iPhone ever but was never released to the public so it was not considered as the main first iPhone";
        
        document.getElementById("image1").src = "..images/iphone8s.jpg";
        
    }
    else if(name == "btnl4")
    {
        document.getElementById( "para" ).innerHTML = "The history of iPhone began with a request from Apple Inc. CEO Steve Jobs to the company engineers, asking them to investigate the use of touchscreen devices and tablet computers (which later came to fruition with the iPad).[1][2][3][4] Many have noted the device similarities to Apple previous touch-screen portable device, the Newton MessagePad.[5][6][7][8] Like the MessagePad, the iPhone is nearly all screen. Its form factor is credited to Apple Chief Design Officer, Jonathan Ive.[3][9] The iPhone beta however was created in 2004 to test its ability towards commands of the Apple team and was called the first iPhone ever but was never released to the public so it was not considered as the main first iPhone";
        
        document.getElementById("image1").src = "..images/iphoneSE.png";
    
    }
    else{
        
        alert("Invalid!!");
    }
    
}
function priceForLoop()
  {
  var phone = ["IPhone XS = Rs 10000/=","Apple iPhone XR = Rs 5000/=","iPhone 8 = Rs 15000/=","IPhone X = Rs 25000/=","Nova 5 = Rs 10000/=","Nova 5 Pro = Rs 8000/=",
              "P 30 lite = Rs 89000/=","Z 5 Pro = Rs 90000/=","K9 = Rs 18000/=","K8 Plus = Rs 10000/=","3.1 Plus = Rs 36000/="];
              
        for (i = 0, len = phone.length, list="List of Average Prices <br/>"; i < len; i++) 
        {
              list += phone[i] + "<br />";
              document.getElementById("image1").src="images/list.png";
              document.getElementById("para").innerHTML = list;
        }
  }
  
function priceHigher()
{
  var phone= ["IPhone XS = Rs 10000/=","iPhone 8 = Rs 15000/=","IPhone X = Rs 25000/=","Nova 5 = Rs 10000/=","P 30 lite = Rs 89000/=","Z 5 Pro = Rs 90000/=",
             "K9 = Rs 18000/=","K8 Plus = Rs 10000/=","3.1 Plus = Rs 36000/="];
             
      for (i = 0, len = phone.length, list="List of price highter than 10000 <br/>"; i < len; i++) 
      {
            list += phone[i] + "<br />";
            document.getElementById("image1").src="images/list.png";
            document.getElementById("para").innerHTML = list;
      }
      
  }
  
  
  function priceLower()
  {
    var phone = ["Apple iPhone XR = Rs 5000/=","Nova 5 Pro = Rs 8000/="];
    
       for (i = 0, len = phone.length, list="List of Average price lower than 10000 <br/>"; i < len; i++)
           {
               list += phone[i] + "<br />";
               document.getElementById("image1").src="images/list.png";
               document.getElementById("para").innerHTML = list;
          }
  }