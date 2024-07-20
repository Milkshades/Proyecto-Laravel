<html>
    <head>    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles.css') }} " >
    </head>

    <div class="container">
        <form action="{{ route('login') }}" method="post" >  
            <div class="row">
                <h1><i class="fa fa-lock" aria-hidden="true"></i> TAXI SONRISAS</h1>
            
                </div><br /><br />
                            <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input type="text" name="" class="form-control" placeholder="Usuario"/>
                                    </div><br />
                
                            <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-key icon"></i></span>
                                        </div>
                                            <input type="Password" name="" class="form-control" placeholder="Contraseña" name="password">
                                    </div><br />
                    <div class="checkbox">
                    <label><input type="checkbox" value=""/> Recordar</label>
                    </div><br /><br />
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-off"></span> Ingresar</button>
                    <br />
                    <br />
                    <br /> <center><div style="border:1px solid black;height:1px;width:300px;"></div></center><br />
                <div class="footer">
                </div>
        
            </div>
        </form>    
</html>