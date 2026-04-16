<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<footer>
  <div class="footer-top">
    <div>
      <div class="f-logo">Quinto Continente</div>
      <div class="f-sub">Por Oceania Eventos</div>
      <p class="f-desc">Excelência em entretenimento, gestão e grandes negócios.</p>
    </div>

    <div>
      <div class="f-col-title">Serviços</div>
      <ul class="f-links">
        <li><a href="<?php echo esc_url(home_url('/servicos/')); ?>#intermediacao">Intermediação de Shows</a></li>
        <li><a href="<?php echo esc_url(home_url('/servicos/')); ?>#producao">Produção e Assessoria</a></li>
        <li><a href="<?php echo esc_url(home_url('/servicos/')); ?>#especiais">Projetos Especiais</a></li>
        <li><a href="<?php echo esc_url(home_url('/servicos/')); ?>#leis">Leis de Incentivo</a></li>
      </ul>
    </div>

    <div>
      <div class="f-col-title">Empresa</div>
      <ul class="f-links">
        <li><a href="<?php echo esc_url(home_url('/sobre/')); ?>">Quem Somos</a></li>
        <li><a href="<?php echo esc_url(home_url('/#diferenciais')); ?>">Diferenciais</a></li>
        <li><a href="<?php echo esc_url(home_url('/#contato')); ?>">Contato</a></li>
        <li><a href="https://blog.quintocontinente.com.br" target="_blank" rel="noopener">Blog</a></li>
      </ul>
    </div>

    <div>
      <div class="f-col-title">Contato</div>
      <ul class="f-links">
        <li><a href="mailto:contato@quintocontinente.com.br">contato@quintocontinente.com.br</a></li>
        <li><a href="tel:+5511000000000">(11) 0000-0000</a></li>
        <li><a href="#">São Paulo, SP</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bot">
    <p>© <?php echo esc_html(date_i18n('Y')); ?> Quinto Continente — Por <a href="#">Oceania Eventos</a>. Todos os direitos reservados.</p>
    <p><a href="#">Privacidade</a> &nbsp;·&nbsp; <a href="#">Termos</a></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
