## Maps       
Given we have a map  of 100 x 100 squares       
And units that can move different nr of squares      
And each unit have different attack power       
And can travel different nr of squares      
When two oposite units met several casualties are done      
Then the user who loose all his troops loose the game.      

##Move              
Given there are different types of landscape    
when units move through plain field 
Then has 100% moving capacity   

Given there are different types of landscape    
When units move through woods
Then has 50% moving capacity    

Given there are different types of landscape    
When units move through mountaignes 
Then has 20% moving capacity    

##Attack    
Given differrent type of efficiency in combat   
When unit of the same type attack   
Then Unit of the same type have 100% efficiency attack  

Given differrent type of efficiency in combat   
When soldier attack Tank    
Then is 10% efficiency  

Given differrent type of efficiency in combat   
When soldier attack Plane   
Then is 1% efficiency   

##Range Attack    
Given each unit type has different capabilities 
And  Soldier has 1 square fire power    
And Tank has 3 squre fire power 
And Plane has 5 square fire power   
When a unit has an enemy unit in his range  
Then she attack 

=======
Given we have a map  of 100 x 100 squares
And units that can move different nr of squares and are deployed random on the map
And each unit have different attack power
And can travel different nr of squares
When two oposite units met several casualties are done
Then the user who loose all his troops loose the game.

...  to be refined
