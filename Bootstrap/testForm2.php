<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
    <title>Bootstrap 101 Template</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <form>
      <div>
        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess1">Input with success</label>
          <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2">
          <span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
        </div>
        <div class="form-group has-warning">
          <label class="control-label" for="inputWarning1">Input with warning</label>
          <input type="text" class="form-control" id="inputWarning1">
        </div>
        <div class="form-group has-error">
          <label class="control-label" for="inputError1">Input with error</label>
          <input type="text" class="form-control" id="inputError1">
        </div>
        <div class="has-success">
          <div class="checkbox">
            <label>
              <input type="checkbox" id="checkboxSuccess" value="option1">
              Checkbox with success
            </label>
          </div>
        </div>
        <div class="has-warning">
          <div class="checkbox">
            <label>
              <input type="checkbox" id="checkboxWarning" value="option1">
              Checkbox with warning
            </label>
          </div>
        </div>
        <div class="has-error">
          <div class="checkbox">
            <label>
              <input type="checkbox" id="checkboxError" value="option1">
              Checkbox with error
            </label>
          </div>
        </div>
      </div>

      <hr/>

      <div>
        <div class="form-group has-success has-feedback">
          <label class="control-label" for="inputSuccess2">Input with success</label>
          <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
          <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
          <span id="inputSuccess2Status" class="sr-only">(success)</span>
        </div>
        <div class="form-group has-warning has-feedback">
          <label class="control-label" for="inputWarning2">Input with warning</label>
          <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status">
          <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
          <span id="inputWarning2Status" class="sr-only">(warning)</span>
        </div>
        <div class="form-group has-error has-feedback">
          <label class="control-label" for="inputError2">Input with error</label>
          <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status">
          <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
          <span id="inputError2Status" class="sr-only">(error)</span>
        </div>
        <div class="form-group has-success has-feedback">
          <label class="control-label" for="inputGroupSuccess1">Input group with success</label>
          <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
          </div>
          <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
          <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
        </div>
      </div>

      <hr/>

      <div class="form-horizontal">
        <div class="form-group has-success has-feedback">
          <label class="control-label col-sm-3" for="inputSuccess3">Input with success</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status">
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess3Status" class="sr-only">(success)</span>
          </div>
        </div>
        <div class="form-group has-success has-feedback">
          <label class="control-label col-sm-3" for="inputGroupSuccess2">Input group with success</label>
          <div class="col-sm-9">
            <div class="input-group">
              <span class="input-group-addon">@</span>
              <input type="text" class="form-control" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
            </div>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputGroupSuccess2Status" class="sr-only">(success)</span>
          </div>
        </div>
      </div>
    </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>