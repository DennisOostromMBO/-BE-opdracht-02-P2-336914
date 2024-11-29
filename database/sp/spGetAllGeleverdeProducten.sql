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
        PROD.Naam,                             
        LEVE.Contactpersoon,      
        MAGA.AantalAanwezig,        
        MAGA.VerpakkingsEenheid, 
        PPL.DatumLevering
    FROM products AS PROD
    INNER JOIN magazijnen AS MAGA ON PROD.Id = MAGA.ProductId
    LEFT JOIN product_per_leveranciers AS PPL ON PROD.Id = PPL.ProductId
    LEFT JOIN leveranciers AS LEVE ON PPL.LeverancierId = LEVE.Id;
END;
