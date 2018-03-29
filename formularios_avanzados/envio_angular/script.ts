import {
    NgModule,
    Component,
    Injectable,
    Pipe,
    OnInit
} from '@angular/core';
import {
    ReactiveFormsModule,
    FormsModule,
    FormGroup,
    FormControl,
    Validators,
    FormBuilder
} from '@angular/forms';
import {BrowserModule} from '@angular/platform-browser';
import {platformBrowserDynamic} from '@angular/platform-browser-dynamic';
import {HttpModule, Http, Response} from '@angular/http';
import { URLSearchParams } from "@angular/http";
import 'rxjs/Rx';


@Injectable()
export class ExternalService {
  apiRoot: string = '/angular/';
  response: any;

  constructor(private http: Http) {}

  sendValues(name: string, last_name:string) {
    let promise = new Promise((resolve, reject) => {
      let apiURL = `api.php`;
      let data = new URLSearchParams();
      data.append('name', name);
      data.append('last_name', last_name);
      data.append('data', 123);
      
      this.http.post(apiURL, data)
          .toPromise()
          .then(
              res => { // Success
                this.response = res.json();
                resolve();
              },
              msg => { // Error
                reject(msg);
              }
          );
    });
    return promise;
  }
}


@Component({
  selector: 'model-form',
  template: `
  
  <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Angular</h4>
        
        <form novalidate
          [formGroup]="myform"
          (ngSubmit)="onSubmit()">

          <fieldset formGroupName="name">

            <div class="medium-6  columns">
              <label>Name</label>
              <input type="text"
                class="form-control"
                formControlName="firstName"
                name="firstName"
                required>
            </div>
            <div class="medium-6  columns">
              <label>Last Name</label>
              <input type="text"
                class="form-control"
                formControlName="lastName"
                name="lastName"
                required>
            </div>
            <div class="medium-12  columns">
              <input value="SEND" id="btnSend" class="button primary" type="submit" [disabled]="!myform.valid">
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <pre>{{ response | json }}</pre>
  
`
})
class ModelFormComponent implements OnInit {
  myform: FormGroup;
  firstName: FormControl;
  lastName: FormControl;
  response: any;

  constructor(private external: ExternalService) {
    this.response = this.external.response;
  }

  ngOnInit() {
    this.createFormControls();
    this.createForm();
  }

  createFormControls() {
    this.firstName = new FormControl('', Validators.required);
    this.lastName = new FormControl('', Validators.required);
  }

  createForm() {
    this.myform = new FormGroup({
      name: new FormGroup({
        firstName: this.firstName,
        lastName: this.lastName,
      })
    });
  }

  onSubmit() {
    if (this.myform.valid) {

      this.external.sendValues( this.myform.controls.name.controls.firstName.value, 
                          this.myform.controls.name.controls.lastName.value )
                  .then(_ => {
                    this.response = this.external.response;
                  }
                  );

      this.myform.reset();
      this.response = this.external.response;
    }
  }
}


@Component({
  selector: 'app',
  template: `<model-form></model-form>`
})
class AppComponent {
}


@NgModule({
  imports: [
    BrowserModule,
    FormsModule,
    ReactiveFormsModule,
    HttpModule
    ],
  declarations: [
    AppComponent,
    ModelFormComponent
  ],
  bootstrap: [
    AppComponent
  ],
  providers: [ExternalService]
})
class AppModule {
}

platformBrowserDynamic().bootstrapModule(AppModule);