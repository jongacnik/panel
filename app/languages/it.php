<?php

return array(
  'title'   => 'Italiano',
  'author'  => 'mirco <e0ae240@gmail.com>',
  'version' => '1.0.0',
  'data'    => array(

    // global
    'cancel'  => 'Annulla',
    'add'     => 'Aggiugi',
    'save'    => 'Salva',
    'saved'   => 'Salvato!',
    'delete'  => 'Elimina',
    'insert'  => 'Inserisci',
    'ok'      => 'Ok',

    // options (sidebar)
    'options.show' => 'Mostra opzioni',
    'options.hide' => 'Nascondi opzioni',

    // installation
    'installation'                              => 'Installazione',
    'installation.check.headline'               => 'Installazione di Kirby Panel',
    'installation.check.text'                   => 'Kirby ha riscontrato i seguenti problemi durante l\'installazione…',
    'installation.check.retry'                  => 'Riprova',
    'installation.check.error'                  => 'Sono stati riscontrati dei problemi!',
    'installation.check.error.accounts'         => '/site/accounts non dispone dei permessi di scrittura',
    'installation.check.error.avatars'          => '/assets/avatars non dispone dei permessi di scrittura',
    'installation.check.error.blueprints'       => 'Aggiungi la cartella /site/blueprints',
    'installation.check.error.content'          => 'La cartella /content e tutti i file e le cartelle in essa contenuti devono disporre dei permessi di scrittura.',
    'installation.check.error.thumbs'           => 'La cartella /thumbs deve disporre dei permessi di scrittura.',
    'installation.signup.username.label'        => 'Crea il tuo primo profilo',
    'installation.signup.username.placeholder'  => 'Nome utente',
    'installation.signup.email.label'           => 'Email',
    'installation.signup.email.placeholder'     => 'mail@esempio.com',
    'installation.signup.password.label'        => 'Password',
    'installation.signup.language.label'        => 'Lingua',
    'installation.signup.button'                => 'Crea un nuovo profilo',

    // login
    'login'                 => 'Login',
    'login.welcome'         => 'Accedi con il tuo nuovo profilo',
    'login.username.label'  => 'Username',
    'login.password.label'  => 'Password',
    'login.error'           => 'Username o password non validi',
    'login.button'          => 'Accedi',

    // logout
    'logout' => 'Logout',

    // dashboard
    'dashboard'                       => 'Dashboard',
    'dashboard.index.pages.title'     => 'Pagine',
    'dashboard.index.pages.add'       => 'Aggiungi',
    'dashboard.index.site.title'      => 'URL del sito',
    'dashboard.index.account.title'   => 'Il tuo account',
    'dashboard.index.account.edit'    => 'Modifica',
    'dashboard.index.metatags.title'  => 'Informazioni sul sito',
    'dashboard.index.metatags.edit'   => 'Modifica',
    'dashboard.index.history.title'   => 'Le tue ultime motifiche',
    'dashboard.index.history.text'    => 'Le ultime pagine modificate verranno mostrate qui per permetterti di ritrovarle più facilmente.',

    // metatags
    'metatags'      => 'Informazioni sul sito',
    'metatags.back' => 'Torna alla dashboard',

    // pages
    'pages.show.settings'                   => 'Impostazioni della pagina',
    'pages.show.preview'                    => 'Anteprima',
    'pages.show.changeurl'                  => 'Modifica URL',
    'pages.show.delete'                     => 'Elimina questa pagina',
    'pages.show.subpages.title'             => 'Pagine',
    'pages.show.subpages.add'               => 'Aggiungi',
    'pages.show.subpages.empty'             => 'Questa pagina non ha sottopagine',
    'pages.show.files.title'                => 'Files',
    'pages.show.files.add'                  => 'Aggiungi',
    'pages.show.files.empty'                => 'Questa pagina non ha file',
    'pages.show.error.permissions.title'    => 'Questa pagina non dispone dei permessi di scrittura',
    'pages.show.error.permissions.text'     => 'Verifica i permessi della cartella /content e di tutto il suo contenuto.',
    'pages.show.error.permissions.retry'    => 'Riprova',
    'pages.show.error.notitle.title'        => 'Nel modello non è previsto un campo per il titolo',
    'pages.show.error.notitle.text'         => 'Aggiungi un campo titolo e riprova',
    'pages.show.error.notitle.retry'        => 'Riprova',
    'pages.show.error.form'                 => 'Compila tutti i campi correttamente',

    'pages.add.title.label'                 => 'Aggiungi una nuova pagina',
    'pages.add.title.placeholder'           => 'Titolo',
    'pages.add.url.label'                   => 'URL',
    'pages.add.url.enter'                   => '(inserisci un titolo)',
    'pages.add.url.close'                   => 'Chiudi',
    'pages.add.url.help'                    => 'Formato: minuscole a-z, 0-9 e trattini',
    'pages.add.template.label'              => 'Template',
    'pages.add.error.title'                 => 'Il titolo è vuoto',
    'pages.add.error.template'              => 'Il template non è stato trovato',
    'pages.add.error.max.headline'          => 'Non è consentita l\'aggiunta di nuove pagine',
    'pages.add.error.max.text'              => 'Il numero massimo di sottopagine per questa pagina è stato raggiunto.',
    'pages.url.uid.label'                   => 'URL',
    'pages.url.uid.label.option'            => 'Crea in base al titolo',
    'pages.url.error.exists'                => 'Esiste già una pagina con lo stesso URL',
    'pages.url.error.move'                  => 'L\'URL non può essere modificato',
    'pages.delete.headline'                 => 'Sei sicuro di voler eliminare questa pagina?',
    'pages.delete.error.home.headline'      => 'La pagina home non può essere eliminata',
    'pages.delete.error.home.text'          => 'Stai cercando di eliminare la pagina home. Quest\'operazione non è possibile e potrebbe causare effetti indesiderati.',
    'pages.delete.error.error.headline'     => 'La pagina di errore non può essere eliminata',
    'pages.delete.error.error.text'         => 'Stai cercando di eliminare la pagina di errorre. Quest\'operazione non è possibile e potrebbe causare effetti indesiderati.',
    'pages.delete.error.children.headline'  => 'La pagina non può essere eliminata',
    'pages.delete.error.children.text'      => 'Questa pagina ha delle sottopagine e quindi non può essere eliminata. Elimina prima tutte le sottopagine.',
    'pages.delete.error.blocked.headline'   => 'La pagina non può essere eliminata',
    'pages.delete.error.blocked.text'       => 'Questa pagina è bloccata e non può essere eliminata.',
    'pages.search.help'                     => 'Cerca le pagine indicando l\'URL. Naviga tra i risultati della ricerca con i tasti freccia e premi invio per visualizzare la pagina selezionata.',
    'pages.search.noresults'                => 'La tua ricerca non ha dato risultati. Prova di nuovo con un URL differente.',
    'pages.error.missing'                   => 'La pagina non è stata trovata',

    // subpages
    'subpages'                        => 'Pagine',
    'subpages.index.headline'         => 'Pagine in',
    'subpages.index.back'             => 'Indietro',
    'subpages.index.add'              => 'Aggiungi nuova pagina',
    'subpages.index.add.first.text'   => 'Questa pagina non ha ancora sottopagine',
    'subpages.index.add.first.button' => 'Aggiungi la prima pagina',
    'subpages.index.visible'          => 'Pagine visibili',
    'subpages.index.visible.help'     => 'Trascina qui una pagina nascosta per riordinarla/renderla visibile.',
    'subpages.index.invisible'        => 'Pagine nascoste',
    'subpages.index.invisible.help'   => 'Trascina qui una pagina visibile per nasconderla.',
    'subpages.error.missing'          => 'La pagina non è stata trovata',

    // files
    'files'                           => 'Files',
    'files.index.headline'            => 'Files associati a',
    'files.index.back'                => 'Indietro',
    'files.index.upload'              => 'Carica un nuovo file',
    'files.index.upload.first.text'   => 'Questa pagina non contiene file',
    'files.index.upload.first.button' => 'Carica il primo file',
    'files.index.edit'                => 'Modifica',
    'files.index.delete'              => 'Elimina',
    'files.show.name.label'           => 'Nome del file',
    'files.show.info.label'           => 'Tipo / Dimensione / Misure',
    'files.show.link.label'           => 'Link pubblico',
    'files.show.open'                 => 'Mostra/scarica file',
    'files.show.back'                 => 'Indietro',
    'files.show.replace'              => 'Sostituisci',
    'files.show.delete'               => 'Elimina',
    'files.show.error.rename'         => 'Non è stato possibile rinominare il file',
    'files.show.error.form'           => 'Compila tutti i campi correttamente',
    'files.upload.drop'               => 'Trascina un file qui…',
    'files.upload.click'              => '…o clicca per caricarne uno',
    'files.replace.drop'              => 'Trascina un file qui…',
    'files.replace.click'             => '…o clicca per caricarne uno',
    'files.replace.error.type'        => 'Il file caricato deve avere lo stesso formato',
    'files.delete.headline'           => 'Sei sicuro di voler eliminare questo file?',
    'files.error.missing.page'        => 'La pagina non è stata trovata',
    'files.error.missing.file'        => 'Il file non è stato trovato',

    // users
    'users'                                 => 'Utenti',
    'users.index.headline'                  => 'Tutti gli utenti',
    'users.index.add'                       => 'Aggiungi nuovo utente',
    'users.index.edit'                      => 'Modifica',
    'users.index.delete'                    => 'Elimina',
    'users.form.username.label'             => 'Nome utente',
    'users.form.username.placeholder'       => 'Il tuo nome utente',
    'users.form.username.help'              => 'Caratteri consentiti: minuscole a-z, 0-9 e trattini',
    'users.form.username.readonly'          => 'Il nome utente non può essere modificato',
    'users.form.firstname.label'            => 'Nome',
    'users.form.lastname.label'             => 'Cognome',
    'users.form.email.label'                => 'Email',
    'users.form.email.placeholder'          => 'mail@esempio.com',
    'users.form.password.label'             => 'Password',
    'users.form.password.confirm.label'     => 'Conferma password',
    'users.form.password.new.label'         => 'Nuova password',
    'users.form.password.new.confirm.label' => 'Conferma la nuova password',
    'users.form.password.new.help'          => 'Lasciare vuoto per mantenere la password corrente',
    'users.form.language.label'             => 'Lingua',
    'users.form.role.label'                 => 'Ruolo',
    'users.form.options.headline'           => 'Opzioni account',
    'users.form.options.message'            => 'Invia email',
    'users.form.options.delete'             => 'Elimina account',
    'users.form.avatar.headline'            => 'Immagine del profilo',
    'users.form.avatar.upload'              => 'Carica immagine del profilo',
    'users.form.avatar.replace'             => 'Sostituisci immagine del profilo',
    'users.form.avatar.delete'              => 'Elimina immagine del profilo',
    'users.form.back'                       => 'Torna agli utenti',
    'users.form.error.password.confirm'     => 'Conferma la password',
    'users.form.error.update'               => 'Il profilo dell\'utente non può essere aggiornato',
    'users.form.error.create'               => 'Il profilo dell\'utente non può essere creato',
    'users.form.error.permissions.title'    => 'La cartella degli account non dispone dei permessi di scrittura.',
    'users.form.error.permissions.text'     => 'Verifica che la cartella /site/accounts esista e disponga dei permessi di scrittura.',
    'users.delete.headline'                 => 'Sei sicuro di voler eliminare questo utente?',
    'users.delete.error'                    => 'L\'utente non può essere eliminato',
    'users.avatar.drop'                     => 'Trascina qui un\'immagine per il profilo…',
    'users.avatar.click'                    => '…o clicca per caricarne una',
    'users.avatar.error.type'               => 'Puoi solo caricare files in formato JPG, PNG o GIF.',
    'users.avatar.error.folder.headline'    => 'La cartella delle immagini di profilo non ha i permessi di scrittura',
    'users.avatar.error.folder.text'        => 'Crea la catella <strong>/assets/avatars</strong> e assegnale i permessi di scrittura per caricare le immagini dei profili.',
    'users.avatar.delete.error'             => 'L\'immagine del profilo non è potuta essere eliminata.',
    'users.avatar.delete.success'           => 'L\'immagine del profilo è stata eliminata',
    'users.error.missing'                   => 'L\'utente non è stato trovato',

    // form fields
    'fields.required' => 'Campo obbligatorio',
    'fields.date.label' => 'Data',
    'fields.date.months' => array(
      'Gennaio',
      'Febbraio',
      'Marzo',
      'Aprile',
      'Maggio',
      'Giugno',
      'Luglio',
      'Agosto',
      'Settembre',
      'Ottobre',
      'Novembre',
      'Dicembre'
    ),
    'fields.date.weekdays' => array(
      'Domenica',
      'Lunedì',
      'Martedì',
      'Mercoledì',
      'Giovedì',
      'Venerdì',
      'Sabato'
    ),
    'fields.date.weekdays.short' => array(
      'Do',
      'Lu',
      'Ma',
      'Me',
      'Gi',
      'Ve',
      'Sa'
    ),
    'fields.email.label'                    => 'Email',
    'fields.email.placeholder'              => 'mail@esempio.com',
    'fields.number.label'                   => 'Numero',
    'fields.number.placeholder'             => '#',
    'fields.page.label'                     => 'Pagina',
    'fields.page.placeholder'               => 'percorso/alla/pagina',
    'fields.password.label'                 => 'Password',
    'fields.structure.add'                  => 'Aggiungi',
    'fields.structure.add.first'            => 'Aggiungi il primo elemento',
    'fields.structure.empty'                => 'Non ci sono ancora elementi.',
    'fields.structure.cancel'               => 'Annulla',
    'fields.structure.save'                 => 'Salva',
    'fields.structure.edit'                 => 'Modifica',
    'fields.structure.delete'               => 'Elimina',
    'fields.tags.label'                     => 'Tags',
    'fields.tel.label'                      => 'Telefono',
    'fields.textarea.buttons.bold.label'    => 'Testo in grassetto',
    'fields.textarea.buttons.bold.text'     => 'Testo in grassetto',
    'fields.textarea.buttons.italic.label'  => 'Testo in corsivo',
    'fields.textarea.buttons.italic.text'   => 'Testo in corsivo',
    'fields.textarea.buttons.link.label'    => 'Link',
    'fields.textarea.buttons.email.label'   => 'Email',
    'fields.textarea.buttons.image.label'   => 'Immagine',
    'fields.textarea.buttons.file.label'    => 'File',
    'fields.toggle.yes'                     => 'Sì',
    'fields.toggle.no'                      => 'No',
    'fields.toggle.on'                      => 'On',
    'fields.toggle.off'                     => 'Off',

    // textarea overlays
    'editor.link.url.label'             => 'Link',
    'editor.link.text.label'            => 'Testo del link',
    'editor.link.text.help'             => 'Il testo del link è opzionale',
    'editor.email.address.label'        => 'Email',
    'editor.email.address.placeholder'  => 'mail@esempio.com',
    'editor.email.text.label'           => 'Testo del link',
    'editor.email.text.help'            => 'Il testo del link è opzionale',
    'editor.file.empty'                 => 'In questa pagina non ci sono files',
    'editor.image.empty'                => 'In questa pagina non ci sono immagini',

    // error page
    'error'           => 'Errore',
    'error.headline'  => 'Errore',

  )
);
