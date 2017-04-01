define( function () {
  var oHref;

  function init () {
    displayResent();
    bindResentMail();
  }

  function displayResent () {
    var $noEmail = $( '.no-email' );
    var $reSentEmail = $( '.reSent-email' );

    $noEmail.bind( 'click', function () {
      ( $reSentEmail.css( 'display' ) == 'block' )
        ? $reSentEmail.hide()
        : $reSentEmail.show();
      return false;
    } );
  }

  function bindResentMail () {
    var $reSent = $( '.reSent' );

    $reSent.bind( 'click', function () {
      $.get(this.href , function(result){});
      intervalTime( $reSent );
      $reSent.unbind( 'click' );
      oHref = this.href;
      this.href = 'javascript:void(0);';
      $( this ).addClass( 'no-link' );
      return false;
    } );
  }

  function intervalTime ( $time ) {
    var time = 1000;
    var from = 60;

    ( function () {
      var fun = arguments.callee;

      setTimeout( function () {
        if ( from > 0 )
        {
          $time.html( ' 请(' +from + ' 秒后)重新发送邮件' );
          fun();
        }
        else
        {
          $time.html( '重新发送邮件' );
          $time.attr( 'href', oHref );
          bindResentMail();
          $time.removeClass( 'no-link' );
        }
        from--;
      }, time );
    } )();
  }

  return {
    init: init
  }
} );