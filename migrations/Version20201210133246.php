<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201210133246 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE LigneFraisForfait');
        $this->addSql('DROP TABLE comptable');
        $this->addSql('DROP TABLE fiche_frais');
        $this->addSql('DROP TABLE frais_forfait');
        $this->addSql('DROP TABLE ligne_frais_hors_forfait');
        $this->addSql('ALTER TABLE FicheFrais DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE FicheFrais CHANGE mois mois VARCHAR(100) NOT NULL, CHANGE idVisiteur idVisiteur INT NOT NULL, CHANGE idEtat idEtat INT DEFAULT NULL');
        $this->addSql('ALTER TABLE FicheFrais ADD PRIMARY KEY (idVisiteur)');
        $this->addSql('ALTER TABLE FraisForfait CHANGE id id CHAR(3) NOT NULL');
        $this->addSql('ALTER TABLE LigneFraisHorsForfait CHANGE mois mois VARCHAR(100) DEFAULT NULL, CHANGE idVisiteur idVisiteur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Etat CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE libelle libelle VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE ligne_frais_forfait CHANGE id_frais_forfait_id id_frais_forfait_id CHAR(3) NOT NULL');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECF6760FECA FOREIGN KEY (id_visiteur_id) REFERENCES visiteur (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECF98FA628F FOREIGN KEY (id_frais_forfait_id) REFERENCES FraisForfait (id)');
        $this->addSql('ALTER TABLE Visiteur CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE nom nom VARCHAR(30) NOT NULL, CHANGE prenom prenom VARCHAR(30) NOT NULL, CHANGE login login VARCHAR(20) NOT NULL, CHANGE mdp mdp VARCHAR(20) NOT NULL, CHANGE adresse adresse VARCHAR(50) NOT NULL, CHANGE cp cp VARCHAR(5) NOT NULL, CHANGE ville ville VARCHAR(30) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE LigneFraisForfait (mois CHAR(6) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, idVisiteur CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, idFraisForfait CHAR(3) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, quantite INT DEFAULT NULL, INDEX idFraisForfait (idFraisForfait), INDEX IDX_146093DC1D06ADE3D6B08CB7 (idVisiteur, mois), PRIMARY KEY(idVisiteur, mois, idFraisForfait)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE comptable (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prenom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, login VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, mdp VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE fiche_frais (id INT AUTO_INCREMENT NOT NULL, id_visiteur_id CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, id_etat_id CHAR(2) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, mois VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nb_justificatifs INT NOT NULL, montant_valide DOUBLE PRECISION NOT NULL, date_modif DATETIME DEFAULT \'NULL\', INDEX IDX_5FC0A6A76760FECA (id_visiteur_id), INDEX IDX_5FC0A6A7D3C32F8F (id_etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE frais_forfait (id INT AUTO_INCREMENT NOT NULL, id_frais_forfait VARCHAR(3) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, libelle VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, montant DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ligne_frais_hors_forfait (id INT AUTO_INCREMENT NOT NULL, id_visiteur_id CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, mois VARCHAR(15) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, libelle VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, date DATE DEFAULT \'NULL\', montant DOUBLE PRECISION DEFAULT \'NULL\', INDEX IDX_EC01626D6760FECA (id_visiteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT LigneFraisForfait_ibfk_1 FOREIGN KEY (idVisiteur, mois) REFERENCES FicheFrais (idVisiteur, mois)');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT LigneFraisForfait_ibfk_2 FOREIGN KEY (idFraisForfait) REFERENCES FraisForfait (id)');
        $this->addSql('ALTER TABLE etat CHANGE id id CHAR(2) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE libelle libelle VARCHAR(30) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE FicheFrais DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE FicheFrais CHANGE mois mois CHAR(6) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE idEtat idEtat CHAR(2) CHARACTER SET utf8mb4 DEFAULT \'\'\'CR\'\'\' COLLATE `utf8mb4_general_ci`, CHANGE idVisiteur idVisiteur CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE FicheFrais ADD PRIMARY KEY (idVisiteur, mois)');
        $this->addSql('ALTER TABLE FraisForfait CHANGE id id CHAR(3) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE LigneFraisHorsForfait CHANGE mois mois CHAR(6) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE idVisiteur idVisiteur CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE visiteur CHANGE id id CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE nom nom CHAR(30) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom CHAR(30) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, CHANGE login login CHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, CHANGE mdp mdp CHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse CHAR(30) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, CHANGE cp cp CHAR(5) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, CHANGE ville ville CHAR(30) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECF6760FECA');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECF98FA628F');
        $this->addSql('ALTER TABLE ligne_frais_forfait CHANGE id_frais_forfait_id id_frais_forfait_id INT NOT NULL');
    }
}
