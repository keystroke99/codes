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

# Angluar 4 Reactive Forms
app.module.ts
```
 import { FormsModule, ReactiveFormsModule  } from '@angular/forms'; 
  
```
In Form Component.ts
```
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
```
Form Code
```
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form [formGroup]="myForm" (ngSubmit)="submitForm(myForm.value)">
        <div class="form-group" [ngClass]="{'has-error':!myForm.controls['firstName'].valid && myForm.controls['firstName'].touched}">
          <label for="">First Name: </label>
          <input type="text" class="form-control" placeholder="Enter First Name" [formControl]="myForm.controls['firstName']">
        </div>
        <div class="form-group" [ngClass]="{'has-error':!myForm.controls['lastName'].valid && myForm.controls['lastName'].touched}">
          <label for="">Last Name: </label>
          <input type="text" class="form-control" placeholder="Enter Last Name" [formControl]="myForm.controls['lastName']">
        </div>
        <div class="form-group">
          <label for="">Gender</label>
          <div class="alert alert-danger" *ngIf="!myForm.controls['gender'].valid && myForm.controls['gender']">You must select Gender</div>
        </div>
        <div class="radio">
          <label for="">
              <input type="radio" name="gender" value="Male" [formControl]="myForm.controls['gender']">
            Male
          </label>
        </div>
        <div class="radio">
          <label for="">
            <input type="radio" name="gender" value="Female" [formControl]="myForm.controls['gender']">
            Female
          </label>
        </div>
        <div class="form-group">
          <label for="">Activites</label>
        </div>
        <label class="checkbox-inline">
          <input type="checkbox" value="hiking" name="hiking" [formControl]="myForm.controls['hiking']"> Hiking
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" value="swmimming" name="swimming" [formControl]="myForm.controls['swimming']"> Swimming
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" value="running" name="running" [formControl]="myForm.controls['running']"> Running 
        </label>
        <div class="form-group">
          <button type="submmit" class="btn btn-default" [disabled]="!myForm.valid">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
```

# Sorting / Filtering in Angular 4
https://github.com/VadimDez/ngx-order-pipe
