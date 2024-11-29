-- ****************************************************************
-- Doel: Opvragen van records uit de tabellen voor productinformatie,
--       leveranciercontact en magazijninformatie.
-- ************************************************
-- Versie:    Datum:            Auteur:              Details
-- *******    ******            *******              ******* 
-- 01         29-11-2024        Dennis Oostrom       SP voor read
-- ****************************************************************

-- Verwijder de bestaande stored procedure indien deze bestaat
DROP PROCEDURE IF EXISTS spGetAllGeleverdeProducten;

-- Maak de nieuwe stored procedure aan
CREATE PROCEDURE spGetAllGeleverdeProducten()
BEGIN
    SELECT 
        P.Naam AS Productnaam,                      -- Productnaam uit de products tabel
        LEVE.Naam AS LeverancierNaam,                -- Naam van de leverancier
        LEVE.Contactpersoon AS ContactPersoon,       -- Contactpersoon uit de leveranciers tabel
        MAGA.AantalAanwezig AS Aantal,               -- Aantal aanwezig uit de magazijnen tabel
        MAGA.VerpakkingsEenheid AS Verpakkingseenheid, -- Verpakkingseenheid uit de magazijnen tabel
        MAX(PPL.DatumLevering) AS LaatsteLevering    -- Laatste levering uit de product_per_leveranciers tabel
    FROM products AS P
    -- Verbind de producten met de magazijninformatie
    INNER JOIN magazijnen AS MAGA ON P.Id = MAGA.ProductId
    -- Verbind de producten met de leveranciersinformatie via de product_per_leveranciers
    LEFT JOIN product_per_leveranciers AS PPL ON P.Id = PPL.ProductId
    LEFT JOIN leveranciers AS LEVE ON PPL.LeverancierId = LEVE.Id
    -- Groepeer de gegevens per product, leverancier en magazijn
    GROUP BY 
        P.Naam, 
        LEVE.Naam,
        LEVE.Contactpersoon, 
        MAGA.AantalAanwezig, 
        MAGA.VerpakkingsEenheid;
        
    -- Sorteer de resultaten op de datum van de laatste levering (aflopend)
    
END;
