<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ARMA Software">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="QUW48YglX2WRMyzrX6RbKSFkN0b95OuFviS0lPmD">
    <title>Farouk</title>
    <!-- Favicon -->
    <link rel="icon" href="http://kayan-design.com/kayan/images/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="http://kayan-design.com/kayan/admin_assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Page plugins -->
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="http://kayan-design.com/kayan/admin_assets/css/argon.css?v=1.2.0" type="text/css">
    <!-- Bootstrap switch toggle button -->
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Tajawal&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://kayan-design.com/kayan/login_assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="http://kayan-design.com/kayan/login_assets/css/main.css">

        <style>
          .print-mobile
          {
              display: none;
          }

          .result-text
          {
              font-size: 20px;
          }

          .mobile-text
          {
              font-size: 18px !important;
          }

          .choose-card
          {
              border-radius: 60px !important;
          }

          .compound-box
          {
              display: none;
          }

          .input100
          {
              padding: 0 68px 0 68px;
          }

          .symbol-input100
          {
              padding-right: 35px;
          }

          .step-icon
          {
              width: 70px;
              position: relative;
              top: 2px;
              right: -6px;
          }

          .step-icon2
          {
              width: 65px;
              position: relative;
              top: 2px;
              right: 0px;
          }

          .progress
          {
              overflow: hidden;
              height: 25px;
              margin-bottom: 1rem;
              border-radius: 1rem;
              background-color: #e9ecef;
              box-shadow: inset 0 1px 2px rgb(0 0 0 / 10%);
          }

          .progress-bar
          {
              background-image: linear-gradient(90deg, rgb(245 8 8) 0%, rgb(255 162 9) 63%, rgb(228 70 70) 100%);
              border-radius: 30px;
          }

          .box-row
          {
              display: flex;
              justify-content: space-between;
              width: 100%;
              margin: auto;
          }

          .box-button
          {
              display: flex;
              align-items: center;
          }

          .box-label
          {
              text-align: center;
              font-size: 14px;
          }

          .box
          {
              display: flex;
              flex-direction: column;
              flex-grow: 1;
              transition: all 0.3s linear;
          }

          .box-icon
          {
              width: 100px;
              height: 100px;
              padding: 8px;
              margin-bottom: 8px;
              border-radius: 50%;
              border: 3px solid #ccc;
              color: #000;
              transition: all 0.3s linear;
          }

          .box.active .box-icon
          {
              border: 3px solid #FF6539;
          }

          .box-tag
          {
              flex-grow: 1;
              min-width: 20px;
              height: 4px;
              background-color: #ccc;
              transition: all 0.3s linear;
          }

          .box.active .box-tag
          {
              background-color: #FF6539;
          }

          .box:first-child .box-tag-left
          {
              background-color: white;
          }

          .box:last-child .box-tag-right
          {
              background-color: white;
          }

          h1,h2,h3,p,span
          {
              font-family: 'Tajawal', sans-serif;
          }

          @media (max-width: 480px)
          {
              .box
              {
                  width: 16px;
                  height: 16px;
              }

              .box-icon
              {
                  width: 49px;
                  height: 49px;
                  font-size: 10px;
                  padding: 5px;
              }

              body
              {
                  font-size: 0.8em;
              }

              .step-icon
              {
                  width: 30px;
                  position: relative;
                  top: 1px;
                  right: -2px;
              }

              .step-icon2
              {
                  width: 30px;
                  position: relative;
                  top: 0px;
                  right: 0px;
              }

              .step-title
              {
                  font-size: 0.5rem;
              }

              .step-label
              {
                  text-align: center;
                  font-size: 10px;
                  font-family: auto;
              }

              .result-text
              {
                  font-size: 13px;
              }

              .mobile-text
              {
                  font-size: 12px;
              }

              .d-flex
              {
                  display: block !important;
              }

              .col-6
              {
                  max-width: 100% !important;
                  display: block;
                  flex: 0 0 100%;
              }

              .img-lg
              {
                  display: none;
              }

              .print-mobile
              {
                  display: inline;
              }

              .print-desktop
              {
                  display: none;
              }
          }
      </style>
  <style>.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;overflow-y:hidden;background:#fff;box-shadow:0 0 .625em #d9d9d9}.swal2-popup.swal2-toast .swal2-header{flex-direction:row;padding:0}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:static;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;padding:0;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:700}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{font-size:.25em}}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{flex-basis:auto!important;width:auto;height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.8em;left:-.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-toast-animate-success-line-tip .75s;animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-toast-animate-success-line-long .75s;animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:swal2-toast-show .5s;animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:swal2-toast-hide .1s forwards;animation:swal2-toast-hide .1s forwards}.swal2-container{display:flex;position:fixed;z-index:1060;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}.swal2-container.swal2-backdrop-show,.swal2-container.swal2-noanimation{background:rgba(0,0,0,.4)}.swal2-container.swal2-backdrop-hide{background:0 0!important}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-bottom-end>:first-child,.swal2-container.swal2-bottom-left>:first-child,.swal2-container.swal2-bottom-right>:first-child,.swal2-container.swal2-bottom-start>:first-child,.swal2-container.swal2-bottom>:first-child{margin-top:auto}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-no-transition{transition:none!important}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-popup{display:none;position:relative;box-sizing:border-box;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border:none;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-header{display:flex;flex-direction:column;align-items:center;padding:0 1.8em}.swal2-title{position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-actions{display:flex;z-index:1;flex-wrap:wrap;align-items:center;justify-content:center;width:100%;margin:1.25em auto 0}.swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-actions.swal2-loading .swal2-styled.swal2-confirm{box-sizing:border-box;width:2.5em;height:2.5em;margin:.46875em;padding:0;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent!important;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{content:"";display:inline-block;width:15px;height:15px;margin-left:5px;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff}.swal2-styled{margin:.3125em;padding:.625em 2em;box-shadow:none;font-weight:500}.swal2-styled:not([disabled]){cursor:pointer}.swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-styled:focus{outline:0;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-styled::-moz-focus-inner{border:0}.swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;height:.25em;overflow:hidden;border-bottom-right-radius:.3125em;border-bottom-left-radius:.3125em}.swal2-timer-progress-bar{width:100%;height:.25em;background:rgba(0,0,0,.2)}.swal2-image{max-width:100%;margin:1.25em auto}.swal2-close{position:absolute;z-index:2;top:0;right:0;align-items:center;justify-content:center;width:1.2em;height:1.2em;padding:0;overflow:hidden;transition:color .1s ease-out;border:none;border-radius:0;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer}.swal2-close:hover{transform:none;background:0 0;color:#f27474}.swal2-close::-moz-focus-inner{border:0}.swal2-content{z-index:1;justify-content:center;margin:0;padding:0 1.6em;color:#545454;font-size:1.125em;font-weight:400;line-height:normal;text-align:center;word-wrap:break-word}.swal2-checkbox,.swal2-file,.swal2-input,.swal2-radio,.swal2-select,.swal2-textarea{margin:1em auto}.swal2-file,.swal2-input,.swal2-textarea{box-sizing:border-box;width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;background:inherit;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);color:inherit;font-size:1.125em}.swal2-file.swal2-inputerror,.swal2-input.swal2-inputerror,.swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-file:focus,.swal2-input:focus,.swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-file::-moz-placeholder,.swal2-input::-moz-placeholder,.swal2-textarea::-moz-placeholder{color:#ccc}.swal2-file:-ms-input-placeholder,.swal2-input:-ms-input-placeholder,.swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-file::-ms-input-placeholder,.swal2-input::-ms-input-placeholder,.swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-file::placeholder,.swal2-input::placeholder,.swal2-textarea::placeholder{color:#ccc}.swal2-range{margin:1em auto;background:#fff}.swal2-range input{width:80%}.swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}.swal2-range input,.swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}.swal2-input{height:2.625em;padding:0 .75em}.swal2-input[type=number]{max-width:10em}.swal2-file{background:inherit;font-size:1.125em}.swal2-textarea{height:6.75em;padding:.75em}.swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:inherit;color:inherit;font-size:1.125em}.swal2-checkbox,.swal2-radio{align-items:center;justify-content:center;background:#fff;color:inherit}.swal2-checkbox label,.swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-checkbox input,.swal2-radio input{margin:0 .4em}.swal2-validation-message{display:none;align-items:center;justify-content:center;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}.swal2-validation-message::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}.swal2-icon{position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;font-family:inherit;line-height:5em;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474;color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}.swal2-icon.swal2-error.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86;color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-.25em;left:-.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-progress-steps{align-items:center;margin:0 0 1.25em;padding:0;background:inherit;font-weight:600}.swal2-progress-steps li{display:inline-block;position:relative}.swal2-progress-steps .swal2-progress-step{z-index:20;width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#3085d6}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}.swal2-progress-steps .swal2-progress-step-line{z-index:10;width:2.5em;height:.4em;margin:0 -1px;background:#3085d6}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{right:auto;left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}@-webkit-keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@-webkit-keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@-webkit-keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@-webkit-keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-container{top:auto;right:auto;bottom:auto;left:auto;max-width:calc(100% - .625em * 2);background-color:transparent!important}body.swal2-no-backdrop .swal2-container>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-container.swal2-top{top:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-top-left,body.swal2-no-backdrop .swal2-container.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-top-end,body.swal2-no-backdrop .swal2-container.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-container.swal2-center{top:50%;left:50%;transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-left,body.swal2-no-backdrop .swal2-container.swal2-center-start{top:50%;left:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-end,body.swal2-no-backdrop .swal2-container.swal2-center-right{top:50%;right:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom{bottom:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom-left,body.swal2-no-backdrop .swal2-container.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-bottom-end,body.swal2-no-backdrop .swal2-container.swal2-bottom-right{right:0;bottom:0}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static!important}}body.swal2-toast-shown .swal2-container{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validation-message{font-size:1em}</style></head>
  <body dir="rtl" class="bg-white g-sidenav-hidden" cz-shortcut-listen="true" style="min-height: 100vh;">

      <!-- Main content -->
      <div class="main-content" id="panel">

          <!-- Page content -->

      <!-- Header -->
      <div class="header bg-gradient-dark pb-6">
          <div class="container-fluid">
            <div class="header-body">
                <div class="py-0 text-left">
                    <img src="{{ URL('images/form-17 - copy (3).png ') }}" style="width: 300px">
              </div>
            </div>
          </div>
        </div>
        <!-- End: Header -->

      <!-- Page content -->
      <div class="container-fluid mt--6 bg-gradient-dark">

          <div class="row">

              <div class="col-xl-12">

                  <div class="card card-defualt">

                      <div class="card-header" style="min-height: 130px;border-radius: 15px;">
                        <div class="box-row">

                            <div class="box active">
                                <div class="box-button">
                                    <div class="box-tag box-tag-left"></div>
                                    <div class="box-icon text-center">
                                      <img src="{{ URL('images/form-03.png') }}" class="step-icon">
                                    </div>
                                    <div class="box-tag box-tag-right"></div>
                                </div>
                                <h2 class="text-center mb-0 step-title">???????????? ????????????</h2>
                                <span class="box-label step-label">???????????????? ??????????????</span>
                            </div>

                            <div class="box active">
                                <div class="box-button">
                                    <div class="box-tag box-tag-left"></div>
                                    <div class="box-icon text-center">
                                      <img src="{{ URL('images/form-04.png') }}" class="step-icon2">
                                    </div>
                                    <div class="box-tag box-tag-right"></div>
                                </div>
                                <h2 class="text-center mb-0 step-title">???????????? ??????????????</h2>
                                <span class="box-label step-label">???????????? ????????????</span>
                            </div>

                            <div class="box">
                                <div class="box-button">
                                    <div class="box-tag box-tag-left"></div>
                                    <div class="box-icon text-center">
                                      <img src="{{ URL('images/form-05.png') }}" class="step-icon2">
                                    </div>
                                    <div class="box-tag box-tag-right"></div>
                                </div>
                                <h2 class="text-center mb-0 step-title">???????????? ??????????????</h2>
                                <span class="box-label step-label">?????????????? ??????????????????</span>
                            </div>

                        </div>
                      </div>

                      <div class="card-body mt-3 text-center" id="card-body" style=""><div class="container col-md-9">
          <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width:17%">
              ???????? 1 ???? 6
          </div>
          </div>
      </div>

        {{-- <form class="step_form2" data-step="2">
          <div class="row justify-content-center mt-4">
              <div class="col-md-8">

                  <div class="my-3 d-flex justify-content-between">
                      <h3>???? ???? ?????? ???????????? ???????????? ?????????????? ??</h3>
                      <h3>What is the unit type</h3>
                  </div>
                  <div class="wrap-input100 validate-input mb-4">
                      <select class="input100" name="unit_type" required="">
                          <option selected="" disabled="" value="">?????? ????????????</option>
                          <option>?????? ??????????</option>
                          <option>?????????? ??????????</option>
                          <option>????????</option>
                          <option>???????? - ??????????</option>
                          <option>?????? ??????????</option>
                          <option>???????????? ???? ??????????</option>
                          <option>???????????? ???? ??????</option>
                          <option>????????</option>
                          <option>???????? ????????</option>
                          <option>??????????</option>
                          <option>???????? ??????????</option>
                          <option>???????? ????????</option>
                          <option>??????????</option>
                          <option>??????????????</option>
                          <option>???????????? ??????????</option>
                      </select>

                      <span class="focus-input100"></span>
                      <span class="symbol-input100">
                          <i class="fas fa-th" aria-hidden="true"></i>
                      </span>
                  </div>

                  <div class="my-3 d-flex justify-content-between">
                      <h3>?????? ?????? ???? ???? ???? ??????????</h3>
                      <h3>Where is it located</h3>
                  </div>
                  <div class="wrap-input100 validate-input mb-4">
                      <select class="input100" name="location" required="">
                          <option selected="" disabled="" value="">????????????</option>
                          <option>?????????? 6 ????????????</option>
                          <option>????????????</option>
                          <option>????????????</option>
                          <option>?????????? ??????</option>
                          <option>???????????? ???? ??????????</option>
                          <option>????????????</option>
                          <option>?????????? ????????</option>
                          <option>??????????????</option>
                          <option>?????????? ??????????????</option>
                          <option>????????????????????</option>
                          <option>??????????</option>
                          <option>??????????????????</option>
                          <option>????????????</option>
                          <option>??????????????</option>
                          <option>???????????? ??????????????</option>
                          <option>?????????? ????????????</option>
                          <option>?????????????? ???????????????? ??????????????</option>
                          <option>????????????</option>
                          <option>?????????? ????????????</option>
                          <option>????????????</option>
                          <option>??????????</option>
                          <option>?????? ??????????????</option>
                          <option>?????????? ??????</option>
                          <option>??????????</option>
                          <option>??????????????????</option>
                          <option>???????????? ????????????</option>
                          <option>????????</option>
                      </select>

                      <span class="focus-input100"></span>
                      <span class="symbol-input100">
                          <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                      </span>
                  </div>

                  <div class="my-3 d-flex justify-content-between">
                      <h3>???? ?????? ???????????? ?????? ???????? ?????????????? ??????????</h3>
                      <h3>Is this unit located inside a compound</h3>
                  </div>
                  <div class="wrap-input100 validate-input mb-4">
                      <select id="compound" class="input100" name="compound" required="">
                          <option selected="" disabled="" value="">????????</option>
                          <option value="1">??????</option>
                          <option value="0">????</option>
                      </select>

                      <span class="focus-input100"></span>
                      <span class="symbol-input100">
                          <i class="fa fa-city" aria-hidden="true"></i>
                      </span>
                  </div>

                  <div class="compound-box">

                      <div class="my-3 d-flex justify-content-between">
                          <h3>?????? ??????????????????</h3>
                          <h3>Compound Name</h3>
                      </div>
                      <div class="wrap-input100 validate-input mb-4">
                          <input id="compound_name" type="text" class="input100" name="compound_name" placeholder="??????????????????">

                          <span class="focus-input100"></span>
                          <span class="symbol-input100">
                              <i class="fa fa-home" aria-hidden="true"></i>
                          </span>
                      </div>

                  </div>

              </div>
          </div>

          <input type="hidden" name="step" value="2">
          <input type="hidden" name="name" value="lpl">
          <input type="hidden" name="phone" value="25">
          <input type="hidden" name="email" value="f@s.c">
          <div class="card-footer my-4">
              <div class="form-group mb-0 text-left">
                  <button type="submit" class="btn btn-success submit"><i class="fas fa-arrow-circle-left"></i>  ???????????? </button>
              </div>
          </div>
      </form> --}}
@if ($parameters)
      <form action="{{route('pagetwostore')}}" method="post">
        {{csrf_field()}}

        <input type="hidden" name="email" value="{{$parameters['email']}}">
        <input type="hidden" name="phone" value="{{$parameters['phone']}}">
        <input type="hidden" name="name" value="{{$parameters['name']}}">


        <div class="row justify-content-center mt-4">
            <div class="col-md-8">

                <div class="my-3 d-flex justify-content-between">
                    <h3>???? ???? ?????? ???????????? ???????????? ?????????????? ??</h3>
                    <h3>What is the unit type</h3>
                </div>
                <div class="wrap-input100 validate-input mb-4">
                    <select class="input100" name="unit_type" required="">
                        <option selected="" disabled="" value="">?????? ????????????</option>
                        <option>?????? ??????????</option>
                        <option>?????????? ??????????</option>
                        <option>????????</option>
                        <option>???????? - ??????????</option>
                        <option>?????? ??????????</option>
                        <option>???????????? ???? ??????????</option>
                        <option>???????????? ???? ??????</option>
                        <option>????????</option>
                        <option>???????? ????????</option>
                        <option>??????????</option>
                        <option>???????? ??????????</option>
                        <option>???????? ????????</option>
                        <option>??????????</option>
                        <option>??????????????</option>
                        <option>???????????? ??????????</option>
                    </select>

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fas fa-th" aria-hidden="true"></i>
                    </span>
                </div>


                <div class="my-3 d-flex justify-content-between">
                    <h3>?????? ?????? ???? ???? ???? ??????????</h3>
                    <h3>Where is it located</h3>
                </div>
                <div class="wrap-input100 validate-input mb-4">
                    <select class="input100" name="location" required="">
                        <option selected="" disabled="" value="">????????????</option>
                        <option>?????????? 6 ????????????</option>
                        <option>????????????</option>
                        <option>????????????</option>
                        <option>?????????? ??????</option>
                        <option>???????????? ???? ??????????</option>
                        <option>????????????</option>
                        <option>?????????? ????????</option>
                        <option>??????????????</option>
                        <option>?????????? ??????????????</option>
                        <option>????????????????????</option>
                        <option>??????????</option>
                        <option>??????????????????</option>
                        <option>????????????</option>
                        <option>??????????????</option>
                        <option>???????????? ??????????????</option>
                        <option>?????????? ????????????</option>
                        <option>?????????????? ???????????????? ??????????????</option>
                        <option>????????????</option>
                        <option>?????????? ????????????</option>
                        <option>????????????</option>
                        <option>??????????</option>
                        <option>?????? ??????????????</option>
                        <option>?????????? ??????</option>
                        <option>??????????</option>
                        <option>??????????????????</option>
                        <option>???????????? ????????????</option>
                        <option>????????</option>
                    </select>

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                    </span>
                </div>


                <div class="my-3 d-flex justify-content-between">
                    <h3>???? ?????? ???????????? ?????? ???????? ?????????????? ??????????</h3>
                    <h3>Is this unit located inside a compound</h3>
                </div>
                <div class="wrap-input100 validate-input mb-4">
                    <select id="compound" class="input100" name="compound" required="">
                        <option selected="" disabled="" value="">????????</option>
                        <option value="1">??????</option>
                        <option value="0">????</option>
                    </select>

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-city" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="compound-box">

                    <div class="my-3 d-flex justify-content-between">
                        <h3>?????? ??????????????????</h3>
                        <h3>Compound Name</h3>
                    </div>
                    <div class="wrap-input100 validate-input mb-4">
                        <input id="compound_name" type="text" class="input100" name="compound_name" placeholder="??????????????????">

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </span>
                    </div>

                </div>

            </div>
        </div>
{{--
        <div class="my-3 d-flex justify-content-between">

            <span>Page 1 ID</span>
        </div>
        <div class="wrap-input100 validate-input mb-4">
            <input id="page_one_id" type="text" class="input100" name="page_one_id" placeholder="page_one_id " >

            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-mobile" aria-hidden="true"></i>
            </span>
        </div> --}}



    <hr>

<div class="modal-footer">

    <button type="submit" class="btn btn-success submit"><i class="fas fa-arrow-circle-left"></i>  ???????????? </button>

</div>
</form>
@endif

  </div>

                  </div>

              </div>

          </div>

      </div>
          <!-- end: Page content -->

      </div>
      <!-- end: Main content -->



      <!-- Popup Modal -->
      <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
          <div class="modal-wrapper">
            <div class="modal-dialog modal-lg" id="modal_body">

            </div>
          </div>
      </div>

      <div id="loader" data-load="<div class=&quot;divload&quot;><img src=&quot;http://kayan-design.com/kayan/images/load.gif&quot; width=&quot;50&quot; class=&quot;m-auto&quot;></div>"></div>
      <div id="loader2" data-load="<div class=&quot;d-flex&quot;><img src=&quot;http://kayan-design.com/kayan/images/loader.gif&quot; width=&quot;50&quot; class=&quot;m-auto&quot;></div>"></div>
      <div id="loader3" data-load="<div class=&quot;d-flex&quot;><img src=&quot;http://kayan-design.com/kayan/images/calculate.gif&quot; style=&quot;width: 250px;border-radius: 20px;&quot; class=&quot;m-auto&quot;></div>"></div>

      <script src="http://kayan-design.com/kayan/admin_assets/vendor/jquery/dist/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
      <script src="http://kayan-design.com/kayan/admin_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="http://kayan-design.com/kayan/admin_assets/vendor/js-cookie/js.cookie.js"></script>
      <script src="http://kayan-design.com/kayan/admin_assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
      <script src="http://kayan-design.com/kayan/admin_assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
      <script type="application/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

      <!-- Argon JS -->
      <script src="http://kayan-design.com/kayan/admin_assets/js/argon.js?v=1.2.0"></script>

      <script>

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $(document).on('submit', '.step_form1', function(e)
      {
          e.preventDefault();
          let formData = new FormData(this);

          var loader 	  = $('#loader2').attr('data-load');
          var step 	  = $(this).attr('data-step');
          var active    = '.box:eq('+step+')';

          $(active).addClass('active');
          $('#card-body').slideUp();
          $('#card-body').html(loader);

          $.ajax({
                  url: "http://kayan-design.com/kayan/nextstep",
                  type:"POST",
                  data: formData,
                  dataType: 	'text',
                  contentType: false,
                  processData: false,
                  success : function(response)
                      {
                          $('#card-body').html(response);
                          $('#card-body').slideDown(500);
                      }
                  })
      });

      $(document).on('submit', '.step_form2', function(e)
      {
          e.preventDefault();
          let formData = new FormData(this);

          var loader 	  = $('#loader2').attr('data-load');
          $('#card-body').slideUp();
          $('#card-body').html(loader);

          $.ajax({
                  url: "http://kayan-design.com/kayan/nextstep",
                  type:"POST",
                  data: formData,
                  dataType: 	'text',
                  contentType: false,
                  processData: false,
                  success : function(response)
                      {
                          $('#card-body').html(response);
                          $('#card-body').slideDown(500);
                      }
                  })
      });

      $(document).on("click",".choose-card", function()
      {
          var loader 	  	= $('#loader2').attr('data-load');
          var all 	  	= $(this).attr('data-all');
          var all_objects = JSON.parse(decodeURIComponent(all));

          $('#card-body').slideUp();
          $('#card-body').html(loader);

          $.ajax({
                  url: "http://kayan-design.com/kayan/nextstep",
                  type:"POST",
                  dataType: 'text',
                  data:    all_objects,
                  success : function(response)
                      {
                          $('#card-body').html(response);
                          $('#card-body').slideDown(500);
                      }
                  })
      });

      $(document).on('submit', '.step_form3', function(e)
      {
          e.preventDefault();
          let formData = new FormData(this);

          var loader 	  = $('#loader3').attr('data-load');
          var step 	  = $(this).attr('data-step');
          var active    = '.box';

          $(active).addClass('active');
          $('#card-body').html(loader);

          $.ajax({
                  url: "http://kayan-design.com/kayan/nextstep",
                  type:"POST",
                  data: formData,
                  dataType: 	'text',
                  contentType: false,
                  processData: false,
                  success : function(response)
                      {
                          setTimeout(
                          function()
                          {
                              $('#card-body').slideUp().html(response).slideDown(500);
                          }, 3500);
                      }
                  })
      });



      $(document).on("change","#compound", function()
      {
          if ($(this).val() == 1)
          {
              $('.compound-box').slideDown()
              $('#compound_name').prop('required', true);
          }
          else
          {
              $('.compound-box').slideUp()
              $('#compound_name').prop('required', false);
          }
      });


              function print2()
              {
                  var divContents = document.getElementById("print").innerHTML;
                  var a = window.open("", "", "height=800, width=1600");
                  a.document.write(
                      '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"><html>'
                  );
                  a.document.write("<title>Kayan Design House Pre-Offer</title>");
                  a.document.write("<body >");
                  a.document.write(divContents);
                  a.document.write("</body></html>");
                  a.document.close();
                  a.print();
              }

  </script>


  </body></html>
