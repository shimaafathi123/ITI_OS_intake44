# 1. Using vi write your CV in the file mycv. Your CV should include your name, age, school, college, experience,...

![Screenshot from 2023-12-12 22-50-14](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/a1ef0b2c-63a0-448a-a38b-cbfe1728dcec)
![Screenshot from 2023-12-12 22-52-28](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/5c51ebd1-8402-42b3-9ff3-c92888d2b6ac)
![Screenshot from 2023-12-12 22-52-51](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/92c87b52-d773-4545-a84e-09b7f85860ea)

# 2. Open mycv file using vi command then: Without using arrows state how to:
  a. Move the cursor down one line at time.
  
    press "j" in command mode
    
  b. Move the cursor up one line at time.
   
    press "k" in command mode
    
  c. Search for word age
   
    ![Screenshot from 2023-12-12 22-58-24](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/809cdbe7-c3d3-417b-b27b-307b9b8ca4ab)

  d. Step to line 5 (assuming that you are in line 1 and file is more than 5 lines).
     
    press "5G or :5" in command mode
    
  e. Delete the line you are on and line 5.
  
      press "dd" then ":5d" in command mode

  f. How to step to the end of line and change to writing mode in one-step.
       
    press "A" in command mode
    
# 3. List the available shells in your system.

![Screenshot from 2023-12-12 23-08-14](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/b00fa2b9-ab09-430b-8eea-67a9f851adaf)

# 4. List the environment variables in your current shell.

![Screenshot from 2023-12-12 23-36-14](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/78745baf-95ff-4474-a019-eea9bf443606)
![Screenshot from 2023-12-12 23-36-37](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/6aebb1b4-1c9f-409d-a124-205823618886)

# 5. List all of the environment variables for the bash shell.

![Screenshot from 2023-12-12 23-40-39](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/fb8f5332-48a0-4e0f-bf83-e86ebc7767a6)

# 6. What are the commands that list the value of a specific variable?
  
  *env*
  
  *printenv*
  
  *echo*


# 7. Display your current shell name.

  *echo $SHELL*
  
# 8. State the initialization files of: sh, ksh, bash.

    *~/profile* 

    */etc/profile*

    */etc/bashba.bashrc*

    *~/.bash_profile*

    *~/.bash_login*
    
# 9. Edit in your profile to display date at login and change your prompt permanently.
  
![Screenshot from 2023-12-13 01-19-39](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/ace296e6-9101-4006-acc4-d43a0dcfe772)

![Screenshot from 2023-12-13 01-20-08](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/2981de9d-db96-4f0a-a0c6-ec9898630dcf)


# 10.Execute the following command :
  echo \ then press enter
  
  ![Screenshot from 2023-12-13 01-21-46](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/781e8d3b-f2e0-4706-bf6c-458f5cbd276a)

  What is the purpose of \ ?
  
   *the backslash (\) is an escape character.*
   
   *indicating that the next character should be treated literally and not as a part of the command or as a special character*
   
  Notice the prompt ”>” what is that? and how can you change it from “>” to “:”.

  *The > prompt usually indicates that you are in a situation where the shell is expecting more input to complete a command.*

  
# 11.Create a Bash shell alias named ls for the “ls –l” command

![Screenshot from 2023-12-13 01-31-39](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/ed0f62c6-1ae6-4cc1-901e-c008b4905554)
