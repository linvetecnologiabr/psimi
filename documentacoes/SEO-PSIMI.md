# SEO do psimi (michelyciardulo.com.br)

Padrao aplicado: [docs/SEO-PROFISSIONAL.md](../../docs/SEO-PROFISSIONAL.md). Este arquivo registra o estado real, nao a teoria.

- Dominio canonico: `https://michelyciardulo.com.br/` (sem `www`)
- Tipo de propriedade no Search Console: **prefixo de URL** (`https://michelyciardulo.com.br/`), verificado por `<meta name="google-site-verification">` na home. Nao depende de DNS, entao a migracao para a Cloudflare **nao** derruba a verificacao.
- Sitemap: `/sitemap.xml`, gerado por `sitemap.php` (auto-descobre `especialidades/*.php` e `blog/*.php`)
- Robots: `/robots.txt`
- Paginas indexaveis: 23 (home, sobre, formacoes, especialidades + 11 filhas, blog + 7 posts)
- Paginas nao indexaveis: `404.php`, `politica-de-privacidade` (indexavel hoje, sem problema)
- Schema aplicado: `Organization` + `Person` + `EducationalOrganization`, `WebSite`, `Service`/`OfferCatalog`, `BreadcrumbList`, `FAQPage` (home), `Article` (posts)
- Imagem Open Graph: `assets-new/img/og-image.jpg`
- Conversoes monitoradas: WhatsApp (GA4 `G-8S4YL352QX`) e conversao do Google Ads via GTM `GTM-KL6QCM4Z` (`__awct`, id 16521133970)
- Ultima auditoria: 27/08/2026 (Search Console: 23 paginas indexadas, 36 nao indexadas)
- Ultima publicacao: 27/08/2026 (commits `c8f1dda`, `dbdd87b`)

## Regras do projeto

- URL canonica nao tem `.php` nem barra final, **exceto** `/blog/` e `/especialidades/`, que sao diretorios reais e usam barra. Sitemap e canonical seguem essa mesma forma.
- `.htaccess` roda sob PHP-FPM: `php_value` ali devolve 500. Ajuste de PHP vai no pool `scripts/psimi-fpm.conf`.
- Nao bloquear CSS, JS, fontes ou imagens no `robots.txt`.
- Nao usar `meta keywords`.
- Nao publicar `priority` nem `changefreq` no sitemap.
- Icone novo exige regerar `assets-new/icons.php` (sprite local, sem CDN).

## Corrigido em 27/08/2026

| Gravidade | Achado | Correcao |
|---|---|---|
| Alta | `robots.txt` bloqueava `/assets-new/css/`, `/js/`, `/fonts/`, `/bootstrap/`, `/owlcarousel/` | liberados; o Google precisa renderizar a pagina |
| Alta | toda pagina respondia 200 em dois enderecos (`/sobre` e `/sobre.php`), cada um com canonical proprio | 301 de um salto de `.php` e `index.php` para a URL limpa |
| Media | barra final em pagina (`/sobre/`) devolvia **500** por loop de rewrite | 301 para a versao sem barra |
| Media | sitemap listava `/blog` e `/especialidades`, que redirecionam | trocado para `/blog/` e `/especialidades/` |
| Baixa | `priority` e `changefreq` no sitemap | removidos, o Google ignora |
| Baixa | `meta keywords` em 23 paginas | removida |
| Media | icones vinham da CDN jsdelivr: 16 das 43 requisicoes da home | sprite SVG local `assets-new/icons.php` |
| Media | `brain-outline` nao existe no ionicons: 3 titulos sem icone em producao | trocado por `bulb-outline` |

## Migracao do WordPress (27/08/2026)

O site anterior era WordPress (tema `psimi`, plugin `creame-whatsapp-me`). O Search Console listava **31 URLs em "Nao encontrado (404)"**, detectadas em 09/04/2024 e ainda rastreadas em 19/08/2026. Todas ganharam 301 de um salto no `.htaccess`:

| URL antiga | Destino |
|---|---|
| `/ansiedade/`, `/depressao/`, `/dependencia-emocional/`, `/morte-e-luto/`, `/violencia-domestica/`, `/terapia-de-casal/` (e `/index.html` de cada) | `/especialidades/<slug>` |
| `/inseguranca-e-baixa-autoestima/` | `/especialidades/inseguranca` (a pagina antiga juntava os dois temas que hoje sao separados) |
| `/acompanhamento-psicologico/` | `/especialidades/` |
| `/como-funciona-a-terapia-de-casal/` | `/blog/terapia-de-casal` |
| demais posts na raiz (e `/index.html` de cada) | `/blog/<slug>` |
| `/2024/MM/`, `/2024/MM/page/N/`, `/category/blog/` | `/blog/` |
| `/index.html` | `/` |

Sem equivalente, continuam 404 de proposito: `/pri/`, `/course.html`, `/agenda/` e `/search/search_term_string/feed/rss2/` (artefato do Yoast).

Resultado verificado em producao: 27 das 31 resolvem em 200 com um salto; as outras 4 devolvem 404.

Validacao da correcao iniciada no Search Console em 27/08/2026.

## Sitemaps no Search Console

- `/sitemap.xml` reenviado em 27/08/2026 e relido no mesmo dia (antes a ultima leitura era 04/04/2026). 23 paginas.
- **Pendente, manual:** remover `/sitemap-misc.xml` e `/post-sitemap.xml`, herdados do WordPress. Os dois respondem 404 hoje. Em Sitemaps, abrir o menu da linha e escolher remover.

## Pendencias

Tecnicas, do nosso lado:

- Schema completo de `Organization`/`Person`/`Service` e repetido inteiro em todas as 23 paginas. O padrao pede referenciar por `@id` nas internas. Nao e erro, e peso e risco de divergencia.
- `FAQPage` na home: desde 2023 o Google restringiu o rich result de FAQ a sites de governo e saude publica. O markup nao prejudica, mas nao vai render resultado rico.
- Header `X-Frame-Options` sai duplicado (`SAMEORIGIN, SAMEORIGIN`): a conf global do Apache e o `.htaccess` do projeto setam os dois.
- Fontes Google carregadas de `fonts.googleapis.com` + `fonts.gstatic.com`: duas origens de terceiro no caminho critico. Hospedar local reduz latencia e evita enviar IP do visitante ao Google (relevante em site de saude).

Dependem da responsavel:

- Search Console: confirmar propriedade (preferir propriedade de dominio via DNS) e enviar o sitemap.
- Perfil da Empresa no Google, com o endereco da R. Vilela 665. Para busca local de psicologo, esse perfil pesa mais que qualquer ajuste no site.
- Avaliacoes reais no Perfil da Empresa. Nao inventar `Review` nem `aggregateRating` no schema.
- Confirmar se o endereco publicado e o de atendimento presencial atual.
