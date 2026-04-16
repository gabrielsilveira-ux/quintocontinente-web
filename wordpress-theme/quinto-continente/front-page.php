<?php
get_header();
?>

<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-floats">
    <div class="hero-float"><div class="hero-float-num"><b>+</b>200</div><div class="hero-float-label">Shows realizados</div></div>
    <div class="hero-float"><div class="hero-float-num"><b>15</b>+</div><div class="hero-float-label">Anos de mercado</div></div>
    <div class="hero-float"><div class="hero-float-num">BR</div><div class="hero-float-label">Cobertura Nacional</div></div>
  </div>
  <div class="hero-tag"><span class="hero-tag-dot"></span>Hub Estratégico de Entretenimento</div>
  <h1>Viabilize grandes artistas com a <span class="hl">segurança operacional</span> que o seu evento exige.</h1>
  <div class="hero-bottom">
    <p class="hero-sub">Conectamos o seu palco aos maiores nomes do cenário nacional através da expertise técnica e comercial da <strong>Oceania Eventos</strong>.</p>
    <a href="#contato" class="btn-main">Consultar disponibilidade</a>
  </div>
  <div class="hero-rule"></div>
</section>

<section class="servicos" id="servicos">
  <div class="servicos-hd">
    <div><div class="s-label reveal">Nossos Serviços</div><h2 class="s-title reveal">Soluções 360° para o mercado de entretenimento.</h2></div>
    <p class="servicos-hd-note reveal">Cada entrega é construída com precisão técnica e visão estratégica.</p>
  </div>
  <div class="cards-wrap card-grid-2">
    <div class="card reveal"><div class="card-bar"></div><div class="card-idx">01 / 04</div><h3 class="card-title">Intermediação de Shows</h3><p class="card-desc">Acesso direto a artistas parceiros do cenário nacional com negociações transparentes.</p></div>
    <div class="card reveal d1"><div class="card-bar"></div><div class="card-idx">02 / 04</div><h3 class="card-title">Produção e Assessoria</h3><p class="card-desc">Planejamento ponta a ponta: rider técnico, logística e operação de palco.</p></div>
    <div class="card reveal d2"><div class="card-bar"></div><div class="card-idx">03 / 04</div><h3 class="card-title">Projetos Especiais</h3><p class="card-desc">Experiências personalizadas para marcas e eventos exclusivos.</p></div>
    <div class="card reveal d3"><div class="card-bar"></div><div class="card-idx">04 / 04</div><h3 class="card-title">Leis de Incentivo</h3><p class="card-desc">Viabilização de projetos via ProAC e Lei Rouanet com segurança jurídica.</p></div>
  </div>
</section>

<section class="contato" id="contato">
  <div class="s-label reveal">Contato</div>
  <h2 class="s-title reveal">Inicie o seu próximo grande projeto.</h2>
  <div class="contato-inner">
    <div class="contato-lft reveal">
      <p>Nossa equipe está pronta para formatar a <strong>melhor proposta estratégica</strong> para o seu evento.</p>
    </div>
    <div class="form-box reveal d2">
      <?php echo do_shortcode('[contact-form-7 id="booking" title="Formulário de contato"]'); ?>
      <p class="form-ok">Substitua o shortcode acima pelo plugin de formulário escolhido.</p>
    </div>
  </div>
</section>

<?php
get_footer();
