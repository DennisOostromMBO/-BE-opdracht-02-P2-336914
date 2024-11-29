CREATE TABLE IF NOT EXISTS leveranciers (
    Id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Naam VARCHAR(255) NOT NULL,
    ContactPersoon VARCHAR(255) NOT NULL,
    LeverancierNummer VARCHAR(20) NOT NULL,
    Mobiel VARCHAR(15) NOT NULL,
    IsActive BIT NOT NULL DEFAULT 1,
    Comments VARCHAR(255) NULL,
    CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UpdatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;
