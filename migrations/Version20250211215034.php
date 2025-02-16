<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250211215034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE association (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog_post (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, media_file VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', comments INT NOT NULL, likes INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE donation (id INT AUTO_INCREMENT NOT NULL, event_id INT DEFAULT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, apartment VARCHAR(255) DEFAULT NULL, town VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, postal_code VARCHAR(20) NOT NULL, phone VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL, order_notes LONGTEXT DEFAULT NULL, donation_amount NUMERIC(10, 2) NOT NULL, donation_type VARCHAR(255) NOT NULL, payment_method VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_31E581A071F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, association_id INT NOT NULL, location_id INT NOT NULL, name VARCHAR(255) NOT NULL, event_date DATETIME NOT NULL, price DOUBLE PRECISION NOT NULL, type VARCHAR(50) NOT NULL, image_filename VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_3BAE0AA7EFB9C8A5 (association_id), INDEX IDX_3BAE0AA764D218E (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE location (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, latitude VARCHAR(255) NOT NULL, longitude VARCHAR(255) NOT NULL, donation_amount VARCHAR(255) NOT NULL, youtube_embed_url VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE donation ADD CONSTRAINT FK_31E581A071F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7EFB9C8A5 FOREIGN KEY (association_id) REFERENCES association (id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA764D218E FOREIGN KEY (location_id) REFERENCES location (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE donation DROP FOREIGN KEY FK_31E581A071F7E88B');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7EFB9C8A5');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA764D218E');
        $this->addSql('DROP TABLE association');
        $this->addSql('DROP TABLE blog_post');
        $this->addSql('DROP TABLE donation');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE location');
    }
}
