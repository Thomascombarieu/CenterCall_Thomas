<?php $this->setVar('titre', 'Modification Campagne'); ?>
<?= $this->extend('Layout') ?>
<?= $this->section('contenu') ?>

<form method="post" action="<?= url_to('modif_campagne_post') ?>" enctype="multipart/form-data">

    <input type="hidden" id="ID_CAMPAGNE" name="ID_CAMPAGNE" value="<?= $campagne['ID_CAMPAGNE'] ?>" />
    <input type="hidden" id="ID_CLIENT" name="ID_CLIENT" value="<?= $campagne['ID_CLIENT'] ?>" />

    <label class="required" for="name">Titre de la campagne</label>

    <input type="text" id="TITRE" name="TITRE" required value="<?= $campagne['TITRE'] ?>" minlength="3" maxlength="25"
        size="18">

    <label class="required" for="LIBELLE">Texte descriptif</label>
    <textarea id="LIBELLE" name="LIBELLE" minlength="3" maxlength="255" size="255"
        required><?= $campagne['LIBELLE'] ?></textarea>


    <?php 
   // Modif Formulaire création
   ?> 

    <label class="required" for="EVENEMENT">Evènements</label>
    
    <input type="text" id="EVENEMENT" name="EVENEMENT" placeholder="Saisissez l'évènement'" required value="<?= $campagne['EVENEMENT'] ?>" minlength="3"
        maxlength="40" size="50" >


    <label class="required" for="start">Date</label>

    <input type="date" id="DATE" name="DATE" value="<?= $campagne['DATE'] ?>" min="<?= $campagne['DATE'] ?>"
        max="2026-12-31" />

    <label for="CONTACTS">Contacts</label>
    <p class="file-accept">Veuillez télécharger un fichier au format CSV.</p>
    <label class="custom-file-upload">
        <input type="file" name="CONTACTS" accept=".csv" id="CONTACTS">
        Choisir un fichier
    </label>
    <input type="submit" value="Suivant">
</form>

<?= $this->endSection() ?>
