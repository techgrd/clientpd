<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Retrieve all existing clients from the database
        $existingClients = Client::all();

        // If there are no existing clients, use the provided data
        if ($existingClients->isEmpty()) {
            $clients = [
                ['C001002', '4 BARRACUDA ENERGY CORP.', 1, 1],
                ['C001003', '6 BARRACUDA ENERGY CORP.', 1, 1],
                ['C001004', 'A.MENARINI PHILIPPINES INC.', 1, 1],
                ['C001005', 'A.N.A. FOODS, LTD.', 1, 1],
                ['C001006', 'ABBOTT LABORATORIES', 1, 1],
                ['C001007', 'ACCIONA AGUA S.A PHILIPPINES BRANCH', 1, 1],
                ['C001008', 'ACCIONA CONSTRUCTION PHILIPPINES INC.', 1, 1],
                ['C001009', 'ACCIONA DAELIM JOINT VENTURE', 1, 1],
                ['C001010', 'ACCIONA.ORG FOUNDATION PHILIPPINES INC', 1, 1],
                ['C001011', 'ADB-PERSONAL (MAKATI)', 1, 1],
                ['C001012', 'ADROW CREATIVES INC.', 1, 1],
                ['C001013', 'AEON INFORMATION TECHNOLOGY SUPPORT SOLUTIONS, INC', 1, 1],
                ['C001014', 'AGENCIA EFE, S.A', 1, 1],
                ['C001015', 'AGENCIA ESPANOLA COOPERACION', 1, 1],
                ['C001016', 'AIA Investment Management and Trust Corp', 1, 1],
                ['C001017', 'AIA PHILIPPINES LIFE AND GENERAL INSURANCE COMPANY', 1, 1],
                ['C001018', 'AID/RIG', 1, 1],
                ['C001019', 'Alpha Blue Visa Services Inc', 1, 1],
                ['C001020', 'Alternergy Sembrano Wind Corp.', 1, 1],
                ['C001021', 'ALTERNERGY WIND ONE CORPORATION', 1, 1],
                ['C001022', 'ALTRAD SERVICES PTY LTD.', 1, 1],
                ['C001023', 'AMADEUS MARKETING PHILS. INC.', 1, 1],
                ['C001024', 'AMC', 1, 1],
                ['C001025', 'AMERICAN BAR ASSOCIATION-ASIA LAW INITIATIVE', 1, 1],
                ['C001026', 'AMH', 1, 1],
                ['C001027', 'ANRITSU PHILIPPINES, INC.', 1, 1],
                ['C001028', 'APHIS', 1, 1],
                ['C001029', 'AREA PRES. OF THE CJCLDS IN THE PHILS., INC.', 1, 1],
                ['C001030', 'ASIAN DEVELOPMENT BANK', 1, 1],
                ['C001031', 'ASIAN GREENENERGY CORP.', 1, 1],
                ['C001032', 'ASTRA SOLAR ENERGY CORP.', 1, 1],
                ['C001033', 'ATA', 1, 1],
                ['C001034', 'ATIMONAN ONE ENERGY, INC.', 1, 1],
                ['C001035', 'ATLAS FERTILIZER CORPORATION', 1, 1],
                ['C001036', 'ATO', 1, 1],
                ['C001037', 'AUE PERSONAL', 1, 1],
                ['C001038', 'AUSAID', 1, 1],
                ['C001039', 'AUSTRALIAN CENTRE FOR INTERNATIONAL AGRICULTURAL R', 1, 1],
                ['C001040', 'AUSTRALIAN FEDERAL POLICE (AFP)', 1, 1],
                ['C001041', 'AUSTRALIAN TRADE COMMISSION (AUSTRADE)', 1, 1],
                ['C001042', 'AVON PRODUCTS MANUFACTURING INC.(APMI)', 1, 1],
                ['C001043', 'BAKELS PHILIPPINES, INC.', 1, 1],
                ['C001044', 'BAKER HUGHES ASIA PACIFIC LTD.', 1, 1],
                ['C001045', 'BANGKO SENTRAL NG PILIPINAS', 1, 1],
                ['C001046', 'BBG', 1, 1],
                ['C001047', 'BDO UNIDENTIFIED DEPOSIT', 1, 1],
                ['C001048', 'BJ WELL SERVICES COMPANY (PHILIPPINES) INC.', 1, 1],
                ['C001049', 'BK TITANS INC.', 1, 1],
                ['C001050', 'BPI AIA LIFE ASSURANCE CORPORATION', 1, 1],
                ['C001051', 'BPI-UNIDENTIFIED DEPOSIT', 1, 1],
                ['C001052', 'BRITISH EMBASSY, MANILA', 1, 1],
                ['C001053', 'CAMARINES MINERALS INC', 1, 1],
                ['C001054', 'CAPGEMINI PHILIPPINES CORP.', 1, 1],
                ['C001055', 'CBP', 1, 1],
                ['C001056', 'CDC (Center for Disease Control)', 1, 1],
                ['C001057', 'CEBU ENERGY DEVELOPMENT CORPORATION', 1, 1],
                ['C001058', 'CIS', 1, 1],
                ['C001059', 'CITIBANK-UNIDENTIFIED DEPOSIT', 1, 1],
                ['C001060', 'Cloudpay Philippines Inc', 1, 1],
                ['C001061', 'Coca-Cola Beverages Philippines, Inc.', 1, 1],
                ['C001062', 'COCA-COLA BOTTLERS BUSINESS SERVICES, INC.', 1, 1],
                ['C001063', 'COFFEY INTERNATIONAL DEVELOPMENT PTY. LTD.', 1, 1],
                ['C001064', 'COGNIZANT TECHNOLOGY SOLUTIONS(PHIL REP OFFICE)', 1, 1],
                ['C001065', 'CON/AG', 1, 1],
                ['C001066', 'CONCEPCION-OTIS PHILS. INC. (COPI)', 1, 1],
                ['C001067', 'CONS (Consular Affairs)', 1, 1],
                ['C001068', 'CONSULATE OF SPAIN', 1, 1],
                ['C001069', 'CONVERGYS PHILIPPINES SERVICES CORP.', 1, 1],
                ['C001070', 'COOPERACION ESPANOLA', 1, 1],
                ['C001071', 'Crown Worldwide Global Business Services Inc.', 1, 1],
                ['C001072', 'CROWN WORLDWIDE MOVERS INC.', 1, 1],
                ['C001073', 'DAO', 1, 1],
                ['C001074', 'DE LA SALLE BROTHERS, INC', 1, 1],
                ['C001075', 'DEA', 1, 1],
                ['C001076', 'DEFENCE', 1, 1],
                ['C001077', 'DEL MONTE PHILIPPINES INC', 1, 1],
                ['C001078', 'DELIVERY HERO LOGISTICS, INC.', 1, 1],
                ['C001079', 'DELIVERY HERO PHILIPPINES INC', 1, 1],
                ['C001080', 'DELMONTE FRESH PRODUCE (PHILS.', 1, 1],
                ['C001081', 'DEPARTMENT OF FOREIGN AFFAIRS & TRADE(DFAT)', 1, 1],
                ['C001082', 'DEPARTMENT OF HOME AFFAIRS', 1, 1],
                ['C001083', 'Department of Human Settlements and Urban Developm', 1, 1],
                ['C001084', 'DEPARTMENT OF IMMIGRATION AND BORDER PROTECTION(DI', 1, 1],
                ['C001085', 'DEXCOM PHILIPPINES INC.', 1, 1],
                ['C001086', 'DHS HSI', 1, 1],
                ['C001087', 'DHS TSA', 1, 1],
                ['C001088', 'DHS USCIS', 1, 1],
                ['C001089', 'DIAGEO ASIA PACIFIC SHARED SERVICES CENTRE LIMITED', 1, 1],
                ['C001090', 'DIAGEO PHILIPPINES INC. - TIN 000-161-879-000', 1, 1],
                ['C001091', 'DLSP-NYEL MANAGEMENT SERVICES', 1, 1],
                ['C001092', 'DOCOMO INTERTOUCH PTE. LTD.(ROHQ)', 1, 1],
                ['C001093', 'DOD', 1, 1],
                ['C001094', 'DOJ', 1, 1],
                ['C001095', 'DOJ ICITAP', 1, 1],
                ['C001096', 'DOJ OPDAT', 1, 1],
                ['C001097', 'DOS STAFFDEL', 1, 1],
                ['C001098', 'DOS/RAO', 1, 1],
                ['C001099', 'DOW AGRO SCIENCES B.V. - TIN# 000-157-963-000', 1, 1],
                ['C001100', 'DOW CHEMICAL PACIFIC LTD PHILS - TIN# 000-159-991-', 1, 1],
                ['C001101', 'DRYSDALE PRODUCT INC.', 1, 1],
                ['C001102', 'DTRA – Defense Threat Reduction Agency', 1, 1],
                ['C001103', 'DU PONT FAR EAST INC.- PHILIPPINES', 1, 1],
                ['C001104', 'DU PONT SUSTAINABLE SOLUTIONS', 1, 1],
                ['C001105', 'DUNCAN CONSUMER HEALTHCARE PHILIPPINES INC', 1, 1],
                ['C001106', 'DUNCAN PHARMACEUTICALS PHILIPPINES INC.- TIN 000-1', 1, 1],
                ['C001107', 'E CHIMES PHARMACEUTICALS INC.', 1, 1],
                ['C001108', 'East-West Seed Company, Inc.', 1, 1],
                ['C001109', 'ECON', 1, 1],
                ['C001110', 'Ecossential Foods Corp.', 1, 1],
                ['C001111', 'EGLOBAL FARES', 1, 1],
                ['C001112', 'EMBASSY OF THE UNITED STATES OF AMERICA', 1, 1],
                ['C001113', 'ENDEC INC.', 1, 1],
                ['C001114', 'ERICSSON AB BRANCH-PAPUA NEW GUINEA', 1, 1],
                ['C001115', 'ERICSSON TELECOMMUNICATIONS INC.', 1, 1],
                ['C001116', 'ESC', 1, 1],
                ['C001117', 'ETIHAD AIRWAYS(PHILIPPINE BRANCH OFFICE)', 1, 1],
                ['C001118', 'EVERY NATION LEADERSHIP INSTITUTE INC.', 1, 1],
                ['C001119', 'EYE FOUNDATION INC.', 1, 1],
                ['C001120', 'FAO', 1, 1],
                ['C001121', 'FAO (US)', 1, 1],
                ['C001122', 'FAR EASTERN UNIVERSITY, INCORPORATED', 1, 1],
                ['C001123', 'FAS', 1, 1],
                ['C001124', 'FBI', 1, 1],
                ['C001125', 'FCF MINERALS CORPORATION', 1, 1],
                ['C001126', 'FCS', 1, 1],
                ['C001127', 'FCS ADB', 1, 1],
                ['C001128', 'Ferring Private Ltd', 1, 1],
                ['C001129', 'FIRST SOLAR ENERGY CORP', 1, 1],
                ['C001130', 'FMC', 1, 1],
                ['C001131', 'FMC AGRO PHILIPPINES, INC.', 1, 1],
                ['C001132', 'FPG INSURANCE CO., INC', 1, 1],
                ['C001133', 'FREEMONT FOODS CORPORATION', 1, 1],
                ['C001134', 'FRESH N FAMOUS FOODS INC', 1, 1],
                ['C001135', 'FSO', 1, 1],
                ['C001136', 'FTO PERSONAL-MAKATI HEAD OFFICE', 1, 1],
                ['C001137', 'FWD LIFE INSURANCE', 1, 1],
                ['C001138', 'GALILEO ASIA LLC (PHILIPPINE BRANCH)', 1, 1],
                ['C001139', 'GBH POWER RESOURCES INC.', 1, 1],
                ['C001140', 'GEMINI WIND ENERGY CORP.', 1, 1],
                ['C001141', 'GFK ASIA PTE LTD (PHIL REP OFFICE)', 1, 1],
                ['C001142', 'GLAXO SMITHKLINE PHILIPPINES, INC. - TIN 000-122-5', 1, 1],
                ['C001143', 'GLAXOSMITHKLINE CONSUMER HEALTHCARE PHILIPPINES, I', 1, 1],
                ['C001144', 'GLENN REBULTAN', 1, 1],
                ['C001145', 'GLOBAL BUSINESS POWER CORPORATION', 1, 1],
                ['C001146', 'GLOBAL ENERGY SUPPLY CORPORATION', 1, 1],
                ['C001147', 'GLOBAL LUZON ENERGY DEVELOPMENT CORPORATION', 1, 1],
                ['C001148', 'GLOBAL MEDICAL TECHNOLOGIES MANILA INC.', 1, 1],
                ['C001149', 'GLOBAL TRADE ENERGY RESOURCES CORP.', 1, 1],
                ['C001150', 'GLOBE TELECOM', 1, 1],
                ['C001151', 'GMA NETWORK FILMS, INC.', 1, 1],
                ['C001152', 'GMA NETWORK, INC - TIN# 000-917-916-000', 1, 1],
                ['C001153', 'GPS', 1, 1],
                ['C001154', 'GRANDWORTH RESOURCES CORPORATION', 1, 1],
                ['C001155', 'GREAT MINDS INTEGRATED CONSULTANCY INC.', 1, 1],
                ['C001156', 'GREEN BULB PUBLIC RELATIONS INC.', 1, 1],
                ['C001157', 'GREEN TEE, INC.', 1, 1],
                ['C001158', 'GREENERGY FOR GLOBAL INC.', 1, 1],
                ['C001159', 'H&M HENNES & MAURITZ INC.', 1, 1],
                ['C001160', 'HABITAT FOR HUMANITY INTERNATIONAL, INC. (RHQ)', 1, 1],
                ['C001161', 'HARD DISCOUNT PHILIPPINES, INC.', 1, 1],
                ['C001162', 'HELIOS SOLAR ENERGY CORP', 1, 1],
                ['C001163', 'HENNY PENNY', 1, 1],
                ['C001164', 'HERBALIFE INTERNATIONAL PHILIPPINES, INC.', 1, 1],
                ['C001165', 'HERSHEY PHILIPPINES INCORPORATED (HPI)', 1, 1],
                ['C001166', 'HOLCIM EAST ASIA BUSINESS SERVICE CENTRE B.V. PHIL', 1, 1],
                ['C001167', 'HOLCIM PHILIPPINES BUSINESS SERVICE CENTER, INC', 1, 1],
                ['C001168', 'HOLCIM PHILIPPINES, INC.', 1, 1],
                ['C001169', 'IBB', 1, 1],
                ['C001170', 'ICITAP', 1, 1],
                ['C001171', 'ICTSI (INTL CONTAINER TERMINAL INC.)', 1, 1],
                ['C001172', 'IFAD', 1, 1],
                ['C001173', 'IM (INFORMATION MANAGEMENT)', 1, 1],
                ['C001174', 'IMO', 1, 1],
                ['C001175', 'INBOUND PERSONAL-MAKATI HEAD OFFICE', 1, 1],
                ['C001176', 'INFRASTRUCTURE', 1, 1],
                ['C001177', 'INGREDION PHILIPPINES INC.', 1, 1],
                ['C001178', 'INNOGEN PHARMACEUTICAL INC', 1, 1],
                ['C001179', 'INSTITUTO CERVANTES', 1, 1],
                ['C001180', 'INTEGRATED MICROELECTRONICS, I', 1, 1],
                ['C001181', 'INTERNATIONAL RICE RESEARCH IN', 1, 1],
                ['C001182', 'INTERNATIONAL SCHOOL MANILA', 1, 1],
                ['C001183', 'INTERNATIONAL SCHOOL MANILA-PD TRAVEL', 1, 1],
                ['C001184', 'INTERNATIONAL SCHOOL MANILA-TRAVEL ALLOWANCE', 1, 1],
                ['C001185', 'INTERTOUCH BUSINESS SOLUTIONS INC.', 1, 1],
                ['C001186', 'INTERTOUCH PHILIPPINES, INC.', 1, 1],
                ['C001187', 'IQVIA SOLUTIONS OPERATIONS CENTER PHILIPPINES INC.', 1, 1],
                ['C001188', 'IRRI-PERSONAL', 1, 1],
                ['C001189', 'IRRI-PERSONAL(HOME LEAVE)', 1, 1],
                ['C001190', 'ISLA PETROLEUM & GAS CORPORATION', 1, 1],
                ['C001191', 'ISLAND WIND ENERGY CORP.', 1, 1],
                ['C001192', 'ISLANDS', 1, 1],
                ['C001193', 'ISM-PERSONAL', 1, 1],
                ['C001194', 'ISM-TRAVEL CREDITS', 1, 1],
                ['C001195', 'ISUZU PHILIPPINES CORPORATION', 1, 1],
                ['C001196', 'ITSUWA SHOJI KAISHA INC.', 1, 1],
                ['C001197', 'Ixus Solar Energy Corp.', 1, 1],
                ['C001198', 'JAMES HARDIE PHILIPPINES INC.', 1, 1],
                ['C001199', 'JAPAN FRESH FOODS CO. LTD.', 1, 1],
                ['C001200', 'JAPAN PRODUCE CO., LTD.', 1, 1],
                ['C001201', 'JGC PHILIPPINES, INC.', 1, 1],
                ['C001202', 'JOLLIBEE FOODS CORPORATION', 1, 1],
                ['C001203', 'JOLLIBEE GROUP FOUNDATION', 1, 1],
                ['C001204', 'JOLLIBEE WORLDWIDE PTE.LTD.', 1, 1],
                ['C001205', 'JUSMAG', 1, 1],
                ['C001206', 'KARISMA PROJECT MANAGEMENT INC.', 1, 1],
                ['C001207', 'KONRAD ADENAUER STIFTUNG PHILIPPINES OOFICE', 1, 1],
                ['C001208', 'LANDBANK UNIDENTIFIED DEPOSIT', 1, 1],
                ['C001209', 'LANGDON & SEAH PHILIPPINES INC.', 1, 1],
                ['C001210', 'LASALLIAN SCHOOLS SUPERVISION SERVICES', 1, 1],
                ['C001211', 'Latter-day Saint Charities', 1, 1],
                ['C001212', 'LDS PERSONAL', 1, 1],
                ['C001213', 'LEGATT', 1, 1],
                ['C001214', 'LEISURE  TRAVEL', 1, 1],
                ['C001215', 'LEVI STRAUSS (PHIL.) INC. II', 1, 1],
                ['C001216', 'LEVI STRAUSS GLOBAL TRADING COMPANY II, LIMITED', 1, 1],
                ['C001217', 'LF ASIA (PHILIPPINES), INC.', 1, 1],
                ['C001218', 'LIBRARY OF CONGRESS', 1, 1],
                ['C001219', 'LIHANGIN WIND ENERGY CORP.', 1, 1],
                ['C001220', 'LOC', 1, 1],
                ['C001221', 'MANAGEMENT SCIENCES FOR HEALTH INC', 1, 1],
                ['C001222', 'MANG INASAL PHILIPPINES INC.', 1, 1],
                ['C001223', 'MANULIFE ASSET MANAGEMENT AND TRUST CORPORATION', 1, 1],
                ['C001224', 'MANULIFE DATA SERVICES, INC', 1, 1],
                ['C001225', 'MANULIFE PHILIPPINES', 1, 1],
                ['C001226', 'MARSMAN & COMPANY, INC. - NATR', 1, 1],
                ['C001227', 'MARSMAN DRYSDALE - REAL STATE CORP.', 1, 1],
                ['C001228', 'MARSMAN DRYSDALE AGRIBUSINESS', 1, 1],
                ['C001229', 'MARSMAN DRYSDALE CORP.', 1, 1],
                ['C001230', 'MARSMAN DRYSDALE CORP.- Coulte', 1, 1],
                ['C001231', 'MARSMAN DRYSDALE FOODS INC.', 1, 1],
                ['C001232', 'MARSMAN DRYSDALE GROUP', 1, 1],
                ['C001233', 'MARSMAN DRYSDALE INTERNATIONAL HOLDINGS INC.', 1, 1],
                ['C001234', 'MARSMAN DRYSDALE MEDICAL PRODUCTS, INC.', 1, 1],
                ['C001235', 'MARSMAN DRYSDALE PTE LIMITED', 1, 1],
                ['C001236', 'MARSMAN DRYSDALE TRAVEL, INC.', 1, 1],
                ['C001237', 'MARSMAN DRYSDALE TROPICAL FRUITS, INC.', 1, 1],
                ['C001238', 'MARSMAN ESTATE PLANTATION INC', 1, 1],
                ['C001239', 'The Marsman Drysdale Foundation Inc.', 1, 1],
                ['C001240', 'MARSMAN LABORATORIES', 1, 1],
                ['C001241', 'MARSMAN PHARMA', 1, 1],
                ['C001242', 'MARSMAN-DRYSDALE LAND, INC.', 1, 1],
                ['C001243', 'MBTC-UNIDENTIFIED DEPOSIT', 1, 1],
                ['C001244', 'MD AGRIHOLDINGS INC.', 1, 1],
                ['C001245', 'MD AGRIVENTURES, INC.', 1, 1],
                ['C001246', 'MD BIOTECH AND RESEARCH CORP.', 1, 1],
                ['C001247', 'MD DAVAO AGRIVENTURES, INC. (MDDAVI)', 1, 1],
                ['C001248', 'MD DESIGNS & FURNITURE INC.', 1, 1],
                ['C001249', 'MD INFOTECH TRADING, INC.', 1, 1],
                ['C001250', 'MD INTERNATIONAL LIMITED', 1, 1],
                ['C001251', 'MD OFFICE SYSTEM & SOLUTION, INC.', 1, 1],
                ['C001252', 'MD PANABO AGRIVENTURES INC.', 1, 1],
                ['C001253', 'MD RIOVISTA AGRIVENTURES', 1, 1],
                ['C001254', 'MEDICAL UNIT', 1, 1],
                ['C001255', 'MEPI - PERSONAL', 1, 1],
                ['C001256', 'MGEN RENEWABLE ENERGY, INC.', 1, 1],
                ['C001257', 'MGT', 1, 1],
                ['C001258', 'MGT/CLO', 1, 1],
                ['C001259', 'MGT/FAC', 1, 1],
                ['C001260', 'MGT/FMC', 1, 1],
                ['C001261', 'MGT/GSO', 1, 1],
                ['C001262', 'MGT/HR', 1, 1],
                ['C001263', 'MGT/MED', 1, 1],
                ['C001264', 'MIRAE ASIA ENERGY CORPORATION', 1, 1],
                ['C001265', 'Mirus Wind Energy Corp.', 1, 1],
                ['C001266', 'MR JAMES PATRICK CUNNINGHAM', 1, 1],
                ['C001267', 'MR. JUAN B. SANTOS', 1, 1],
                ['C001268', 'MSG', 1, 1],
                ['C001269', 'MU MA MANAGEMENT LIMITED', 1, 1],
                ['C001270', 'NAVFAC', 1, 1],
                ['C001271', 'NCH CUSTOMER SUPPORT SERVICES, INC.', 1, 1],
                ['C001272', 'NCIS', 1, 1],
                ['C001273', 'NECOTRANS SINGAPORE PTE LTD.', 1, 1],
                ['C001274', 'NES GLOBAL PTE.LTD.', 1, 1],
                ['C001275', 'NEW JAPAN PRODUCE CO.,LTD.', 1, 1],
                ['C001276', 'NOVARTIS HEALTH CARE PHILIPPINES, INC.', 1, 1],
                ['C001277', 'NOVARTIS PHILIPPINES ANIMAL HEALTH', 1, 1],
                ['C001278', 'NUEVO SOLAR ENERGY CORPORATION', 1, 1],
                ['C001279', 'OBO', 1, 1],
                ['C001280', 'OCM', 1, 1],
                ['C001281', 'ORICA GLOBAL BUSINESS SERVICES PHILIPPINES', 1, 1],
                ['C001282', 'ORICA PHILIPPINES, INC.', 1, 1],
                ['C001283', 'ORISSA INTERNATIONAL PHILIPPINES INC', 1, 1],
                ['C001284', 'ORO  VERDE HOLDING AND DEV. CORP', 1, 1],
                ['C001285', 'OUTBOUND PERSONAL-MAKATI HEAD OFFICE', 1, 1],
                ['C001286', 'PACOM', 1, 1],
                ['C001287', 'PANAY ENERGY DEVELOPMENT CORPORATION', 1, 1],
                ['C001288', 'PANAY POWER CORPORATION', 1, 1],
                ['C001289', 'PAO', 1, 1],
                ['C001290', 'PAS', 1, 1],
                ['C001291', 'PDMC DIAGNOSTICS  LABORATORY INC.', 1, 1],
                ['C001292', 'PEACECORPS', 1, 1],
                ['C001293', 'PEAK SUPPORT GLOBAL ENTERPRISES, INC.', 1, 1],
                ['C001294', 'PELICAN AGRO-PRODUCTS, INC.', 1, 1],
                ['C001295', 'PERF MOA PASAY INC.', 1, 1],
                ['C001296', 'PERF RESTAURANTS INC.', 1, 1],
                ['C001297', 'PERF TRINOMA INC', 1, 1],
                ['C001298', 'PFN HOLDINGS CORPORATION', 1, 1],
                ['C001299', 'PH RENEWABLES INC.', 1, 1],
                ['C001300', 'PHILIPPINE DEALING & EXCHANGE CORP.', 1, 1],
                ['C001301', 'PHILIPPINE DEALING SYSTEM HOLDINGS CORP.', 1, 1],
                ['C001302', 'PHILIPPINE DEPOSITORY & TRUST CORP', 1, 1],
                ['C001303', 'PHILIPPINE GEOTHERMAL PRODUCTION COMPANY, INC', 1, 1],
                ['C001304', 'PHILIPPINE SEVEN CORPORATION', 1, 1],
                ['C001305', 'PHILPLANS FIRST, INC.', 1, 1],
                ['C001306', 'PILIPINAS SHELL FOUNDATION INC.', 1, 1],
                ['C001307', 'PILIPINAS SHELL PETROLEUM CORP', 1, 1],
                ['C001308', 'PIONEER HI-BRED  PHILIPPINES, INC.', 1, 1],
                ['C001309', 'PLASTOP ASIA INC.', 1, 1],
                ['C001310', 'POL', 1, 1],
                ['C001311', 'POL INL', 1, 1],
                ['C001312', 'PRIME ENERGY RESOURCES DEVELOPMENT B.V.', 1, 1],
                ['C001313', 'Prime Infrastructure Capital, Inc.', 1, 1],
                ['C001314', 'PRU LIFE INSURANCE CORPORATION OF UK - TIN 004-661', 1, 1],
                ['C001315', 'PSU', 1, 1],
                ['C001316', 'PUBLIC AFFAIRS', 1, 1],
                ['C001317', 'QUEZON POWER (PHILIPPINES) LTD. CO', 1, 1],
                ['C001318', 'Quezon Wind Energy Corp.', 1, 1],
                ['C001319', 'R1 RCM PHILIPPINES, INC.', 1, 1],
                ['C001320', 'RA', 1, 1],
                ['C001321', 'RADIOWEALTH FINANCE COMPANY,. INC', 1, 1],
                ['C001322', 'RED RIBBON BAKESHOP INC', 1, 1],
                ['C001323', 'RED RIBBON HOLDINGS INC.', 1, 1],
                ['C001324', 'REDONDO PENINSULA ENERGY, INC.', 1, 1],
                ['C001325', 'Regional ISSO', 1, 1],
                ['C001326', 'REGUS SERVICE CENTRE PHILIPPINES BV (ROHQ)', 1, 1],
                ['C001327', 'Resource Solutions Global ServiceCentre Phil. Inc.', 1, 1],
                ['C001328', 'RIMC', 1, 1],
                ['C001329', 'RISSO', 1, 1],
                ['C001330', 'RIZAL WIND ENERGY CORP.', 1, 1],
                ['C001331', 'ROCHE (PHILIPPINES) INC.', 1, 1],
                ['C001332', 'Rosa Luxemburg Stiftung Manila Representative Offi', 1, 1],
                ['C001333', 'RSO', 1, 1],
                ['C001334', 'RSO/ESC', 1, 1],
                ['C001335', 'RSO/ESO', 1, 1],
                ['C001336', 'SAAD PARACHA', 1, 1],
                ['C001337', 'SAMARITAN\'S PURSE (PHILIPPINES) INC.', 1, 1],
                ['C001338', 'SAN BUENAVENTURA POWER LTD. CO.', 1, 1],
                ['C001339', 'SANDOZ PHILIPPINES, CORP.', 1, 1],
                ['C001340', 'SANDVIK TAMROCK PHILIPPINES INC.', 1, 1],
                ['C001341', 'SANOFI PASTEUR INC.', 1, 1],
                ['C001342', 'SANOFI-AVENTIS PHILIPPINES, INC.', 1, 1],
                ['C001343', 'SANOFI-SYNTHELABO PHILS.', 1, 1],
                ['C001344', 'SANTOS KNIGHT FRANK, INC.', 1, 1],
                ['C001345', 'SATMO', 1, 1],
                ['C001346', 'SAVE THE CHILDREN INTERNATIONAL-PHIL. BRANCH', 1, 1],
                ['C001347', 'SEARCA', 1, 1],
                ['C001348', 'SECURITY BANK UNIDENTIFIED DEPOSIT', 1, 1],
                ['C001349', 'SERVIER PHILIPPINES, INC.', 1, 1],
                ['C001350', 'SGTAP(SHELL GAS TRADING ASIA PACIFIC PHILS.)', 1, 1],
                ['C001351', 'Shearwater Health Advisors, Inc.', 1, 1],
                ['C001352', 'SHELL  SHARED SERVICES CENTRE MANILA', 1, 1],
                ['C001353', 'SHELL CHEMICAL PHILS., INC.', 1, 1],
                ['C001354', 'SHELL SOLAR PHILS. CORP.', 1, 1],
                ['C001355', 'SHOPEE PHILIPPINES INC.', 1, 1],
                ['C001356', 'SINOCHEM CROP PROTECTION (PHIL.) INC.', 1, 1],
                ['C001357', 'Sitel Philippines Corporation', 1, 1],
                ['C001358', 'SITEL ROHQ', 1, 1],
                ['C001359', 'SMCC PHILIPPINES, INC.', 1, 1],
                ['C001360', 'SMITHKLINE BEECHAM RESEARCH LTD. - TIN 0003-254-87', 1, 1],
                ['C001361', 'SOCPAC', 1, 1],
                ['C001362', 'SODEXO BENEFITS AND REWARDS SERVICES PHILIPPINES', 1, 1],
                ['C001363', 'SODEXO ON-SITE SERVICES PHILIPPINES, INC.', 1, 1],
                ['C001364', 'SOJITZ G AUTO PHILIPPINES', 1, 1],
                ['C001365', 'SOLAR PHILIPPINES POWER PROJECT HOLDINGS, INC.', 1, 1],
                ['C001366', 'Solus Wind Energy Corp.', 1, 1],
                ['C001367', 'SONION PHILIPPINES, INC', 1, 1],
                ['C001368', 'SPANISH EMBASSY', 1, 1],
                ['C001369', 'SPX PHILIPPINES, INC.', 1, 1],
                ['C001370', 'STATE/CON', 1, 1],
                ['C001371', 'STATE/FFA', 1, 1],
                ['C001372', 'STATE/ICASS', 1, 1],
                ['C001373', 'STATE/PROGRAM', 1, 1],
                ['C001374', 'STEPAN  PHILIPPINES QUATERNARIES, INC', 1, 1],
                ['C001375', 'SUN & FUN SPORT REISEN', 1, 1],
                ['C001376', 'SUN LIFE  FINANCIAL PLANS INC.', 1, 1],
                ['C001377', 'SUN LIFE ASSET MANAGEMENT  COMPANY , INC.', 1, 1],
                ['C001378', 'SUN LIFE FINANCIAL', 1, 1],
                ['C001379', 'SUN LIFE FINANCIAL ASIA SERVICES LIMITED', 1, 1],
                ['C001380', 'Supreme Court', 1, 1],
                ['C001381', 'SURESTE PROPERTIES INC.', 1, 1],
                ['C001382', 'SYCIP GORRES VELAYO & CO.', 1, 1],
                ['C001383', 'SYKES ASIA, INC. - TIN 005-057-181-000', 1, 1],
                ['C001384', 'SYKES MARKETING SERVICES, INC. - TIN 239-389-259-0', 1, 1],
                ['C001385', 'SYKES ROHQ', 1, 1],
                ['C001386', 'SYNGENTA PHILS, INC - CROP PROTECTION TIN 000-142-', 1, 1],
                ['C001387', 'SYNGENTA PHILS, INC - SEEDS TIN 000-142-342-000', 1, 1],
                ['C001388', 'TAISHO PHARMACEUTICALS(PHILIPPINES), INC.', 1, 1],
                ['C001389', 'TE CONNECTIVITY MANUFACTURING PHILIPPINES INC.', 1, 1],
                ['C001390', 'TELEPERFORMANCE  GLOBAL SERVICES PHILIPPINES, INC.', 1, 1],
                ['C001391', 'TELEPHILIPPINES INCORPORATED', 1, 1],
                ['C001392', 'TELEPORT BUSINESS TECH SOLUTIONS INC.', 1, 1],
                ['C001393', 'TEL-TRADE COMMUNICATIONS & DEVELOPMENT INC', 1, 1],
                ['C001394', 'TELUS INTERNATIONAL PHILS., INC', 1, 1],
                ['C001395', 'TERADYNE PHILIPPINES LTD.', 1, 1],
                ['C001396', 'TERUMO MARKETING PHILIPPINES INC.', 1, 1],
                ['C001397', 'TETRA PAK PHILIPPINES INC', 1, 1],
                ['C001398', 'THE BRITISH COUNCIL PHILIPPINE BRANCH OFFICE', 1, 1],
                ['C001399', 'THE FRED HOLLOWS FOUNDATION LIMITED-BRANCH OFFICE', 1, 1],
                ['C001400', 'THE HONGKONG & SHANGHAI BANKING CORP. LTD.', 1, 1],
                ['C001401', 'THE WALT DISNEY COMPANY (PHILIPPINES) INC.', 1, 1],
                ['C001402', 'TOLEDO POWER COMPANY', 1, 1],
                ['C001403', 'TOTAL (PHILIPPINES) CORPORATION- TIN#005-145-964-0', 1, 1],
                ['C001404', 'TOTAL DEVELOPPEMENT & MANAGEMENT INC.', 1, 1],
                ['C001405', 'TOTAL OIL ASIA PACIFIC PTE. LTD-ROHQ', 1, 1],
                ['C001406', 'TOURBOX', 1, 1],
                ['C001407', 'TPPH-CRM,INC', 1, 1],
                ['C001408', 'TPPH-FHCS,INC.', 1, 1],
                ['C001409', 'TRANS WORLD INTERNATIONAL LOGISTICS CORP.', 1, 1],
                ['C001410', 'TRANSCOM WORLDWIDE (PHILS) INC.', 1, 1],
                ['C001411', 'TRANSFIELD SERVICES WORLEYPARSONS JV(M)', 1, 1],
                ['C001412', 'TRANSWORLD BROKERAGE', 1, 1],
                ['C001413', 'TRAVEL D PHI-2 AREA PRES  OF THECJCLDS', 1, 1],
                ['C001414', 'TREND MICRO INCORPORATED-PHILIPPINE BRANCH', 1, 1],
                ['C001415', 'TRIP.COM PHILIPPINES INC', 1, 1],
                ['C001416', 'TSA', 1, 1],
                ['C001417', 'TUPPERWARE PHILS. INC.', 1, 1],
                ['C001418', 'TWITTER PHILIPPINES INC.', 1, 1],
                ['C001419', 'TYCHE CONSULTING LIMITED PHILS REGIONAL OPERATING', 1, 1],
                ['C001420', 'TYCO ELECTRONICS PHILIPPINES, INC', 1, 1],
                ['C001421', 'ULTIMATE SKILLS PHILIPPINES INC.', 1, 1],
                ['C001422', 'umlaut Philippines', 1, 1],
                ['C001423', 'UN HABITAT', 1, 1],
                ['C001424', 'UN WOMEN', 1, 1],
                ['C001425', 'UNCDF-DSA', 1, 1],
                ['C001426', 'UNDP', 1, 1],
                ['C001427', 'UNDP-PERSONAL', 1, 1],
                ['C001428', 'UNDSS', 1, 1],
                ['C001429', 'UNHCR', 1, 1],
                ['C001430', 'UNI OIL PETROLEUM PHILS INC.', 1, 1],
                ['C001431', 'UNICEF', 1, 1],
                ['C001432', 'UNICEF-PERSONAL', 1, 1],
                ['C001433', 'UNIDO', 1, 1],
                ['C001434', 'UNIFRUTTI TROPICAL PHILIPPINES, INC.', 1, 1],
                ['C001435', 'UNILEVER GLOBAL SERVICES BV-PHILIPPINES ROHQ', 1, 1],
                ['C001436', 'UNILEVER PERSONAL', 1, 1],
                ['C001437', 'UNILEVER PHILIPPINES INC.', 1, 1],
                ['C001438', 'UNILEVER RFM ICE CREAM, INC.', 1, 1],
                ['C001439', 'UNITED NATIONS OFFICE FOR PROJECT SERVICES(UNOPS)', 1, 1],
                ['C001440', 'UN-OCHA', 1, 1],
                ['C001441', 'UNRC', 1, 1],
                ['C001442', 'US EMBASSY OF KUALA LUMPUR', 1, 1],
                ['C001443', 'US EMBASSY PERSONAL', 1, 1],
                ['C001444', 'USADB', 1, 1],
                ['C001445', 'USAGM – U.S. Agency for Global', 1, 1],
                ['C001446', 'USAID(U.S. AGENCY FOR INTERNATIONAL DEVELOPMENT)', 1, 1],
                ['C001447', 'USCG', 1, 1],
                ['C001448', 'USDA/APHIS', 1, 1],
                ['C001449', 'USDA/FAS (DEPARTMENT OF AGRICULTURE/FOREIGN AGRICU', 1, 1],
                ['C001450', 'VENA ENERGY SHARED SERVICES PTE.LTD-ROHQ', 1, 1],
                ['C001451', 'VETERANS AFFAIR (VA)', 1, 1],
                ['C001452', 'VIA OPTRONICS (PHILIPPINES,) INC.', 1, 1],
                ['C001453', 'VOUNO TRADE & MARKETING SERVICES CORP.', 1, 1],
                ['C001455', 'VXI GLOBAL HOLDINGS B.V.(PHILIPPINES)', 1, 1],
                ['C001456', 'WEENER PLASTOP ASIA INC.', 1, 1],
                ['C001457', 'WESERV SYSTEMS INTERNATIONAL, INC', 1, 1],
                ['C001458', 'WESTCON GROUP PHILIPPINES', 1, 1],
                ['C001459', 'WESTCON SOLUTIONS PHILIPPINES, INC.', 1, 1],
                ['C001460', 'WFP - WORLD FOOD PROGRAMME PHILIPPINES', 1, 1],
                ['C001461', 'YOKOGAWA PHILIPPINES INC.', 1, 1],
                ['C001462', 'ZENITH FOODS CORPORATION', 1, 1],
                ['C001465', 'VSU/ICE', 1, 1],
                ['C001472', 'ALTERNEGY PARTNERS PTE LTD.', 1, 1],
                ['C001473', 'NES-GLOBAL TALENT SDN BHD', 1, 1],
                ['C001474', 'PCCW SOLUTIONS PHILIPPINES, INC.', 1, 1],
                ['C001475', 'ROYAL NORWEGIAN EMBASSY', 1, 1],
                ['C001476', 'SCOMMERCE PHILIPPINES, INC.', 1, 1],
                ['C001477', 'TEAMQUEST TECHNOLOGY, INC.', 1, 1],
                ['C001478', 'INTERTEK TESTING SERVICES PHILS. INC', 1, 1],
                ['C001479', 'OUTSOURCE TRANSCRIPTION(OTPI)', 1, 1],
                ['C001480', 'C/O ALABANG PERSONAL', 1, 1],
                ['C001481', 'PROCTER & GAMBLE INTERNATIONAL OPERATIONS SA-ROHQ', 1, 1],
                ['C001482', 'GBPC GROUP', 1, 1],
                ['C001483', 'VENA GROUP', 1, 1],
                ['C001484', 'US EMBASSY GROUP', 1, 1],
                ['C001485', 'AUSTRALIAN EMBASSY GROUP', 1, 1],
                ['C001486', 'UN GROUP', 1, 1],
                ['C001487', 'ISM GROUP', 1, 1],
                ['C001488', 'Manulife China Bank Life Assurance Corporation', 1, 1],
                ['C001489', 'Prime Integrated Waste Solutions, Inc.', 1, 1],
                ['C001490', 'THE INSULAR LIFE ASSURANCE COMPANY, LTD.', 1, 1],
                ['C001491', 'Helix Mining and Development Corporation', 1, 1],
                ['C001492', 'BRITISH EMBASSY PERSONAL', 1, 1],
                ['C001493', 'DELIVERY HERO LOGISTICS PHILIPPINES, INC', 1, 1],
                ['C001494', 'GREENTECH SOLAR ENERGY INC.', 1, 1],
                ['C001495', 'ISLA LPG CORPORATION', 1, 1],
                ['C001496', 'LEISURE TRAVEL(Inactive)', 1, 1],
                ['C001497', 'NUEVO SOLAR ENERGY(GBP)', 1, 1],
                ['C001498', 'Opus Solar Energy Corp.', 1, 1],
                ['C001499', 'Pact Packaging Philippines, Inc.', 1, 1],
                ['C001500', 'SHELL PILIPINAS CORPORATION', 1, 1],
                ['C001501', 'Upward Wind Energy Corp.', 1, 1],
                ['C001502', 'WFP-PERSONAL', 1, 1],
                ['C001503', 'Manila Regional Support Service (MRSS)', 1, 1],
                ['C001504', 'ISLA LPG CORPORATION', 1, 1],
                ['C001505', 'MANILA MARRIOTT HOTEL', 1, 1],

            ];

            foreach ($clients as $client) {
                Client::create([
                    'code' => $client[0],
                    'name' => $client[1],
                    'status_id' => $client[2],
                    // Assuming 'accountmanager_user_id' should also be provided
                    'accountmanager_user_id' => 1, // You need to set the appropriate user ID here
                ]);
            }
        } else {
            // Use existing clients from the database
            foreach ($existingClients as $existingClient) {
                Client::create([
                    'code' => $existingClient->code,
                    'name' => $existingClient->name,
                    'status_id' => $existingClient->status_id,
                    // Assuming 'accountmanager_user_id' should also be provided
                    'accountmanager_user_id' => 1, // You need to set the appropriate user ID here
                ]);
            }
        }
    }
}