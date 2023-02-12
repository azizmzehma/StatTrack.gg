<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230212202524 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE matches (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournament (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, prise VARCHAR(50) NOT NULL, startdate DATETIME NOT NULL, enddate DATETIME NOT NULL, photo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mmatch ADD tournament_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mmatch ADD CONSTRAINT FK_B9D18F3F33D1A3E7 FOREIGN KEY (tournament_id) REFERENCES tournament (id)');
        $this->addSql('CREATE INDEX IDX_B9D18F3F33D1A3E7 ON mmatch (tournament_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mmatch DROP FOREIGN KEY FK_B9D18F3F33D1A3E7');
        $this->addSql('DROP TABLE matches');
        $this->addSql('DROP TABLE tournament');
        $this->addSql('DROP INDEX IDX_B9D18F3F33D1A3E7 ON mmatch');
        $this->addSql('ALTER TABLE mmatch DROP tournament_id');
    }
}
