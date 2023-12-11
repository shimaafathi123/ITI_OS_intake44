1. Install CentOS /RHEL

      DONE
   
3. What is the difference between cat and more command?


    -cat: view file content in single page

   
    -more: view file content with precentage for each page, and scroll until 100% or conter of file finished

  
5. What is the difference between rm and rmdir using man?

   
    -rm: remove files or direcotries

   
    -rmdir: remove empty directories


    ![Screenshot from 2023-12-11 01-53-07](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/1f64ad39-4b13-4267-bee9-0de3f674bbe4)

   ![Screenshot from 2023-12-11 01-55-40](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/f6a3b574-7810-4f25-87f0-492f38964836)


    
7. Create the following hierarchy under your home directory:

![Screenshot from 2023-12-11 01-58-14](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/f7a88ac7-ca5e-437a-8ae3-a506261d964e)


a. Remove dir11 in one-step. What did you notice? And how did you overcome that?


![Screenshot from 2023-12-11 02-02-30](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/e99a789a-2567-4413-8b03-e98718f35533)


  *"rm: cannot remove 'dir11': Is a directory," because the directory is not empty.*
  

  *so use -r option, which stands for "recursive.*

b. Then remove dir12 using rmdir –p command. State what happened to the hierarchy (Note: you are in your home directory).

![Screenshot from 2023-12-11 02-09-05](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/2623ff03-32f2-4fca-9a9e-3aafbde52e54)



  *emove a directory and its parent directories* 

  

c. The output of the command pwd was /home/user. Write the absolute and relative path for the file mycv




    *absolute path: cd /home/user/docs/mycv*

    
    *relative path: cd docs/mycv*

5. Copy the /etc/passwd file to your home directory making its name is mypasswd.
   

![Screenshot from 2023-12-11 02-14-03](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/32b2f851-0c3d-469f-a3cf-7fa3482017ea)




6. Rename this new file to be oldpasswd.


![Screenshot from 2023-12-11 02-14-48](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/e86590b4-1354-4d2d-86b2-6880df2a5dbe)


7. You are in /usr/bin, list four ways to go to your home directory

    *cd ..*
   
    *cd ~*
   
    *cd*
   
    *cd /home/user*
   
9. List Linux commands in /usr/bin that start with letter w

![Screenshot from 2023-12-11 02-18-51](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/a3eaef0c-99ec-48b4-9b73-bd09821e0179)

10. Display the first 4 lines of /etc/passwd

![Screenshot from 2023-12-11 02-19-53](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/b126ee28-e426-44fa-8f69-44ff678281e4)

10.Display the last 7 lines of /etc/passwd

![Screenshot from 2023-12-11 02-21-15](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/71a4cad4-7b16-4145-8783-fa68e462bfcb)


11.Display the man pages of passwd the command and the file sequentially in one command.


  *man passwd; sudo cat /etc/passwd*
  

12.Display the man page of the passwd file.

  ![Screenshot from 2023-12-11 02-23-41](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/1d886dc3-5dbd-4615-80b1-7409c9e440c9)

13.Display a list of all the commands that contain the keyword passwd in their man page.


      
![Screenshot from 2023-12-11 02-24-56](https://github.com/shimaafathi123/ITI_OS_44_Tasks/assets/93112282/3b431d00-a4ab-4bc4-9e0b-34d5d4a459f3)
