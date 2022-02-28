<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>
            덕소고 거꾸로 수업
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <style>
            .ui-controlgroup-vertical {
            width: 150px;
            }
            .ui-controlgroup.ui-controlgroup-vertical > button.ui-button,
            .ui-controlgroup.ui-controlgroup-vertical > .ui-controlgroup-label {
            text-align: center;
            }
            #car-type-button {
            width: 120px;
            }
            .ui-controlgroup-horizontal .ui-spinner-input {
            width: 20px;
            }
        </style>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
            $( ".controlgroup" ).controlgroup()
            $( ".controlgroup-vertical" ).controlgroup({
            "direction": "vertical"
            });
             } );
         </script>
    </head>
    <body>
    <?php
    require_once("MYDB.php");
    $pdo=db_connect();
    $sql="select * from user.system where setting='register'";
                    $stmh=$pdo->query($sql);
                    while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
    if($row['pass']=="0"){
        ?>
    <script>
    alert("회원가입은 이용하실 수 없습니다.");
    history.back();
    </script>
        <?php
    }
                    }
    ?>
    
    <div id="wrap" style="width : 1250px; margin: 0 auto; text-align : center;">
        <?php include "topmenu.php"; ?>

        <form action="insert.php" method = "post">
            <fieldset style="position : absolute; left : 46%; margin-left : -11.5rem; width : 500px; margin-top : 200px;">
            <div class="controlgroup" >
            <legend>회원가입</legend>
           <select name="grade">
           <option>1</option>
           <option>2</option>
           <option>3</option>
           </select> 
           <b>학년</b>
           <br>
           <br>
           <select name="class">
           <option>01</option>
           <option>02</option>
           <option>03</option>
           <option>04</option>
           <option>05</option>
           <option>06</option>
           <option>07</option>
           <option>08</option>
           <option>09</option>
           <option>10</option>
           <option>11</option>
           <option>12</option>
           </select>
           <b>반</b>
           <br>
           <br><br><br>
           <span class="input input--isao" style="margin-top : -20px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="number" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="번호">
						<span class="input__label-content input__label-content--isao">번호</span>
                    </label>
                    <br>
           <span class="input input--isao" style="margin-top : -20px;">
					<input class="input__field input__field--isao" type="text" id="input-38" name="name" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="이름">
						<span class="input__label-content input__label-content--isao">이름</span>
                    </label>
                    </span>
                    <span class="input input--isao" style="margin-top : -20px;">
					<input class="input__field input__field--isao" type="password" id="input-38" name="pw" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="비밀번호">
						<span class="input__label-content input__label-content--isao">비밀번호</span>
                    </label>
                    </span>
                    
                <p>
				
					<input type="submit" value="회원가입"/>
</div>
                </p>    
                </div>
            </fieldset>            
        </form>

<script src="js/classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
    </body>
</html>