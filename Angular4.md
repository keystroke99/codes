Start Node Server in LAN

ng serve --host 192.168.0.1 --port 4201

Install Node on Sharedhosting (BlueHost)

https://stackoverflow.com/questions/24777750/how-to-host-a-node-js-application-in-shared-hosting

http://vinyll.scopyleft.fr/installing-a-custom-version-of-node-on-a-shared-hosting/

Connect with SSH and follow these instructions to install Node on a shared hosting

In short you first install NVM, then you install the Node version of your choice with NVM.

wget -qO- https://cdn.rawgit.com/creationix/nvm/master/install.sh | bash
Your restart your shell (close and reopen your sessions). Then you

nvm install stable
to install the latest stable version for example. You can install any version of your choice. Check node --version for the node version you are currently using and nvm list to see what you've installed.

In bonus you can switch version very easily (nvm use <version>)

There's no need of PHP or whichever tricky workaround if you have SSH.
