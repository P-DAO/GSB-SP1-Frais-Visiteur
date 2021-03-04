<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201209155659 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE LigneFraisForfait DROP FOREIGN KEY LigneFraisForfait_ibfk_1');
        $this->addSql('ALTER TABLE LigneFraisHorsForfait DROP FOREIGN KEY LigneFraisHorsForfait_ibfk_1');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP FOREIGN KEY LigneFraisForfait_ibfk_2');
        $this->addSql('DROP TABLE FicheFrais');
        $this->addSql('DROP TABLE FraisForfait');
        $this->addSql('DROP TABLE LigneFraisHorsForfait');
        $this->addSql('ALTER TABLE Etat ADD id_etat VARCHAR(2) NOT NULL, CHANGE id id CHAR(2) NOT NULL');
        $this->addSql('DROP INDEX idFraisForfait ON LigneFraisForfait');
        $this->addSql('DROP INDEX IDX_146093DC1D06ADE3D6B08CB7 ON LigneFraisForfait');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD id INT AUTO_INCREMENT NOT NULL, ADD mois_id INT NOT NULL, ADD id_frais_forfait_id INT NOT NULL, DROP mois, DROP idFraisForfait, CHANGE quantite quantite INT NOT NULL, CHANGE idvisiteur id_visiteur_id CHAR(4) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT FK_146093DC6760FECA FOREIGN KEY (id_visiteur_id) REFERENCES Visiteur (id)');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT FK_146093DCFA0749B8 FOREIGN KEY (mois_id) REFERENCES fiche_frais (id)');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT FK_146093DC98FA628F FOREIGN KEY (id_frais_forfait_id) REFERENCES frais_forfait (id)');
        $this->addSql('CREATE INDEX IDX_146093DC6760FECA ON LigneFraisForfait (id_visiteur_id)');
        $this->addSql('CREATE INDEX IDX_146093DCFA0749B8 ON LigneFraisForfait (mois_id)');
        $this->addSql('CREATE INDEX IDX_146093DC98FA628F ON LigneFraisForfait (id_frais_forfait_id)');
        $this->addSql('ALTER TABLE Visiteur ADD id_visiteur VARCHAR(4) NOT NULL, ADD date_embauche DATE NOT NULL, DROP dateEmbauche, CHANGE id id CHAR(4) NOT NULL');
        $this->addSql('ALTER TABLE fiche_frais CHANGE id_etat_id id_etat_id CHAR(2) DEFAULT NULL, CHANGE date_modif date_modif DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A76760FECA FOREIGN KEY (id_visiteur_id) REFERENCES Visiteur (id)');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A7D3C32F8F FOREIGN KEY (id_etat_id) REFERENCES Etat (id)');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait CHANGE libelle libelle VARCHAR(100) DEFAULT NULL, CHANGE date date DATE DEFAULT NULL, CHANGE montant montant DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait ADD CONSTRAINT FK_EC01626D6760FECA FOREIGN KEY (id_visiteur_id) REFERENCES Visiteur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE FicheFrais (mois CHAR(6) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, idVisiteur CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, nbJustificatifs INT DEFAULT NULL, montantValide NUMERIC(10, 2) DEFAULT \'NULL\', dateModif DATE DEFAULT \'NULL\', idEtat CHAR(2) CHARACTER SET utf8mb4 DEFAULT \'\'\'CR\'\'\' COLLATE `utf8mb4_general_ci`, INDEX idEtat (idEtat), INDEX IDX_1C4987DC1D06ADE3 (idVisiteur), PRIMARY KEY(idVisiteur, mois)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE FraisForfait (id CHAR(3) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, libelle CHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, montant NUMERIC(5, 2) DEFAULT \'NULL\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE LigneFraisHorsForfait (id INT AUTO_INCREMENT NOT NULL, mois CHAR(6) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, idVisiteur CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, libelle VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, date DATE DEFAULT \'NULL\', montant NUMERIC(10, 2) DEFAULT \'NULL\', INDEX idVisiteur (idVisiteur, mois), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE FicheFrais ADD CONSTRAINT FicheFrais_ibfk_1 FOREIGN KEY (idEtat) REFERENCES Etat (id)');
        $this->addSql('ALTER TABLE FicheFrais ADD CONSTRAINT FicheFrais_ibfk_2 FOREIGN KEY (idVisiteur) REFERENCES Visiteur (id)');
        $this->addSql('ALTER TABLE LigneFraisHorsForfait ADD CONSTRAINT LigneFraisHorsForfait_ibfk_1 FOREIGN KEY (idVisiteur, mois) REFERENCES FicheFrais (idVisiteur, mois)');
        $this->addSql('ALTER TABLE Etat DROP id_etat, CHANGE id id CHAR(2) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE LigneFraisForfait MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP FOREIGN KEY FK_146093DC6760FECA');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP FOREIGN KEY FK_146093DCFA0749B8');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP FOREIGN KEY FK_146093DC98FA628F');
        $this->addSql('DROP INDEX IDX_146093DC6760FECA ON LigneFraisForfait');
        $this->addSql('DROP INDEX IDX_146093DCFA0749B8 ON LigneFraisForfait');
        $this->addSql('DROP INDEX IDX_146093DC98FA628F ON LigneFraisForfait');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD mois CHAR(6) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD idFraisForfait CHAR(3) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, DROP id, DROP mois_id, DROP id_frais_forfait_id, CHANGE quantite quantite INT DEFAULT NULL, CHANGE id_visiteur_id idVisiteur CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT LigneFraisForfait_ibfk_1 FOREIGN KEY (idVisiteur, mois) REFERENCES FicheFrais (idVisiteur, mois)');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT LigneFraisForfait_ibfk_2 FOREIGN KEY (idFraisForfait) REFERENCES FraisForfait (id)');
        $this->addSql('CREATE INDEX idFraisForfait ON LigneFraisForfait (idFraisForfait)');
        $this->addSql('CREATE INDEX IDX_146093DC1D06ADE3D6B08CB7 ON LigneFraisForfait (idVisiteur, mois)');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD PRIMARY KEY (idVisiteur, mois, idFraisForfait)');
        $this->addSql('ALTER TABLE Visiteur ADD dateEmbauche DATE DEFAULT \'NULL\', DROP id_visiteur, DROP date_embauche, CHANGE id id CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A76760FECA');
        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A7D3C32F8F');
        $this->addSql('ALTER TABLE fiche_frais CHANGE id_etat_id id_etat_id CHAR(2) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_modif date_modif DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait DROP FOREIGN KEY FK_EC01626D6760FECA');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait CHANGE libelle libelle VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date date DATE DEFAULT \'NULL\', CHANGE montant montant DOUBLE PRECISION DEFAULT \'NULL\'');
    }
}
