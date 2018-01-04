<?php /* Template name: Registracija_juoda */ ?>
    <?php get_header('single'); ?>
    <body>
        <div class="gradient">
            <div class="registration">
                <div class="headline-registration">
                    <h1>REGISTRACIJA<i class="fa fa-circle"></i></h1>
                </div>
                <form action="#">
                    Vardas: <span>*</span><br><input type="text" name="fname"><br>
                    Pavardė: <span>*</span><br><input type="text" name="lname"><br>
                    El. paštas: <span>*</span><br><input type="text" name="email"><br>
                    Klasė, kurioje mokaisi: <span>*</span><br><input type="text" name="class"><br>
                    <div class="button-send">
                        <button type="submit">SIŲSTI</button>
                    </div>
                </form>
            </div>
        </div>
    <?php get_footer(); ?>
