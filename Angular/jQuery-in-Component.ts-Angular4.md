```
import { Component, OnInit } from '@angular/core';
declare var jquery:any;
declare var $ :any;

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.css']
})
export class FooterComponent implements OnInit {

  constructor() { }

  ngOnInit() {
    $(".show").on('click', function() {
      $(".ser_menu").slideToggle("slow", function() {});

  });
  }

}

```

Source : StackOverFlow

Yes you can use jquery with Angular 4

Steps: in index.html put <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> in tag

in component ts file below you have to declare var like this
```
import { Component } from '@angular/core';
declare var jquery:any;
declare var $ :any;

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'abgular 4 with jquery';
  toggleTitle(){
    $('.title').slideToggle(); //
  }

}
```
And use this code for corresponding html file like this:
```
<h1 class="title" style="display:none">
  {{title}}
</h1>
<button (click)="toggleTitle()"> clickhere</button>
```
This will work for you. Thanks

URL :: https://stackoverflow.com/questions/43934727/how-to-use-jquery-plugin-with-angular-4
