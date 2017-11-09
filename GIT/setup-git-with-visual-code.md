Install git from https://git-scm.com/download/win

Then open visual studio code and open the command palate using "ctrl+shift+p". Then type "open user setting" , then select " open user setting " from the drop down menu.

vs code command palate

Then this tab will open up with default settings on left and your settings on the right

enter image description here

Now copy this line of code to your own settings page (the pane on the right hand side) and save - "terminal.integrated.shell.windows": "C:\\Program Files\\Git\\bin\\bash.exe"

Note: "C:\\Program Files\Git\bin\bash.exe" is the path where the bash.exe is located from git installation.

Now press " ctrl+` " to open up terminal from vscode. And you will have bash -

Source : https://stackoverflow.com/questions/42606837/how-to-use-bash-on-windows-from-visual-studio-code-integrated-terminal
