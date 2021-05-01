<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210501000045 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Etat CHANGE id id CHAR(2) NOT NULL');
        $this->addSql('ALTER TABLE FicheFrais DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE FicheFrais CHANGE idEtat idEtat CHAR(2) DEFAULT NULL');
        $this->addSql('ALTER TABLE FicheFrais ADD PRIMARY KEY (mois, idVisiteur)');
        $this->addSql('ALTER TABLE FraisForfait CHANGE id id CHAR(3) NOT NULL');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP FOREIGN KEY LigneFraisForfait_ibfk_1');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP FOREIGN KEY LigneFraisForfait_ibfk_2');
        $this->addSql('DROP INDEX idFraisForfait ON LigneFraisForfait');
        $this->addSql('DROP INDEX IDX_146093DC1D06ADE3D6B08CB7 ON LigneFraisForfait');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD id INT AUTO_INCREMENT NOT NULL, CHANGE mois mois VARCHAR(15) NOT NULL, CHANGE quantite quantite INT NOT NULL, CHANGE idvisiteur id_visiteur_id CHAR(4) NOT NULL, CHANGE idfraisforfait id_frais_forfait_id CHAR(3) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT FK_146093DC6760FECA FOREIGN KEY (id_visiteur_id) REFERENCES Visiteur (id)');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT FK_146093DC98FA628F FOREIGN KEY (id_frais_forfait_id) REFERENCES FraisForfait (id)');
        $this->addSql('CREATE INDEX IDX_146093DC6760FECA ON LigneFraisForfait (id_visiteur_id)');
        $this->addSql('CREATE INDEX IDX_146093DC98FA628F ON LigneFraisForfait (id_frais_forfait_id)');
        $this->addSql('ALTER TABLE LigneFraisHorsForfait CHANGE mois mois CHAR(6) DEFAULT NULL, CHANGE idVisiteur idVisiteur CHAR(4) DEFAULT NULL');
        $this->addSql('ALTER TABLE Visiteur CHANGE id id CHAR(4) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Etat CHANGE id id CHAR(2) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE FicheFrais DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE FicheFrais CHANGE idEtat idEtat CHAR(2) CHARACTER SET utf8mb4 DEFAULT \'\'\'CR\'\'\' COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE FicheFrais ADD PRIMARY KEY (idVisiteur, mois)');
        $this->addSql('ALTER TABLE FraisForfait CHANGE id id CHAR(3) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE LigneFraisForfait MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP FOREIGN KEY FK_146093DC6760FECA');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP FOREIGN KEY FK_146093DC98FA628F');
        $this->addSql('DROP INDEX IDX_146093DC6760FECA ON LigneFraisForfait');
        $this->addSql('DROP INDEX IDX_146093DC98FA628F ON LigneFraisForfait');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE LigneFraisForfait DROP id, CHANGE mois mois CHAR(6) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE quantite quantite INT DEFAULT NULL, CHANGE id_visiteur_id idVisiteur CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE id_frais_forfait_id idFraisForfait CHAR(3) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT LigneFraisForfait_ibfk_1 FOREIGN KEY (idVisiteur, mois) REFERENCES FicheFrais (idVisiteur, mois)');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD CONSTRAINT LigneFraisForfait_ibfk_2 FOREIGN KEY (idFraisForfait) REFERENCES FraisForfait (id)');
        $this->addSql('CREATE INDEX idFraisForfait ON LigneFraisForfait (idFraisForfait)');
        $this->addSql('CREATE INDEX IDX_146093DC1D06ADE3D6B08CB7 ON LigneFraisForfait (idVisiteur, mois)');
        $this->addSql('ALTER TABLE LigneFraisForfait ADD PRIMARY KEY (idVisiteur, mois, idFraisForfait)');
        $this->addSql('ALTER TABLE LigneFraisHorsForfait CHANGE mois mois CHAR(6) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE idVisiteur idVisiteur CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE Visiteur CHANGE id id CHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
    }
}
