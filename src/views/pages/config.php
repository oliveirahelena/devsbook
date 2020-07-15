<?=$render('header', ['loggedUser'=>$loggedUser, 'user'=>$user, 'flash' => $flash]);?>
<section class="container main">
    <?=$render('sidebar', ['activeMenu' => 'config']);?>
    <section class="feed mt-10">
        <div class="row">
            <div class="column pr-5">
                <h1>Configurações</h1>

                <?php if(!empty($flash)): ?>
                  <div class="flash"><?php echo $flash; ?></div>
                <?php endif; ?>

                <form class="config-form" method="POST" enctype="multipart/form-data" action="<?=$base;?>/config">
                    
                  <label>
                    Novo Avatar:<br/>
                    <input type="file" name="avatar" /><br/>
                    <img class="image-edit" src="<?=$base;?>/media/avatars/<?=$user->avatar;?>" alt="">
                  </label>

                  <label>
                    Nova Capa:<br/>
                    <input type="file" name="cover" /><br/>
                    <img class="image-edit" src="<?=$base;?>/media/covers/<?=$user->cover;?>" alt="">
                  </label>

                  <hr/>

                  <label>
                    Nome Completo:<br/>
                    <input value="<?=$user->name;?>" type="text" name="name" />
                  </label>

                  <label>
                    Data de Nascimento:<br/>
                    <input value="<?=date('d/m/Y', strtotime($user->birthdate));?>" type="text" name="birthdate" />
                  </label>

                  <label>
                    E-mail:<br/>
                    <input value="<?=$user->email;?>" placeholder="Qual o seu e-mail?" type="email" name="email" />
                  </label>

                  <label>
                    Cidade:<br/>
                    <input value="<?=$user->city;?>" placeholder="Qual a sua cidade?" type="text" name="city" />
                  </label>

                  <label>
                    Trabalho:<br/>
                    <input value="<?=$user->work;?>" placeholder="Onde você trabalha?" type="text" name="work" />
                  </label>
                  
                  <label>
                    Nova senha:<br/>
                    <input placeholder="Caso queira alterar sua senha, digite a nova senha." type="password" name="password" />
                  </label>

                  <label>
                    Confirmar senha:<br/>
                    <input placeholder="Repita a senha para confirmar." type="password" name="password_confirm" />
                  </label>
                  
                  <input class="button" type="submit" value="Salvar"/>
                </form>
            </div>
            <div class="column side pl-5">
               <?=$render('right-side');?>
            </div>
        </div>
    </section>
</section>
<script src="https://unpkg.com/imask"></script>
    <script>
        IMask(
            document.getElementById('birthdate'),
            {
                mask:'00/00/0000'
            }
        );
    </script>
<?=$render('footer');?>