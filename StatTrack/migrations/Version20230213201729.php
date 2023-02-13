<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230213201729 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mmatch DROP FOREIGN KEY FK_B9D18F3F33D1A3E7');
        $this->addSql('ALTER TABLE mmatch ADD CONSTRAINT FK_B9D18F3F33D1A3E7 FOREIGN KEY (tournament_id) REFERENCES tournament (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mmatch DROP FOREIGN KEY FK_B9D18F3F33D1A3E7');
        $this->addSql('ALTER TABLE mmatch ADD CONSTRAINT FK_B9D18F3F33D1A3E7 FOREIGN KEY (tournament_id) REFERENCES tournament (id) ON DELETE SET NULL');
    }
}
