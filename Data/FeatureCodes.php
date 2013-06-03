<?php
/**
 * Copyright (c) 2013 Josiah Truasheim
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace JJs\Bundle\GeonamesBundle\Data;

/**
 * GeoNames Feature Classifications
 * 
 * DO NOT MODIFY
 * Generated from http://www.geonames.org/export/codes.html
 * 
 * @see http://www.geonames.org/export/codes.html
 * @author Josiah <josiah@jjs.id.au>
 */
class FeatureCodes
{

    /**
     * First-order administrative division
     * 
     * A primary administrative division of a country, such as a state in the United States
     * 
     * @var string
     */
    const ADM1 = 'ADM1';

    /**
     * Historical first-order administrative division
     * 
     * A former first-order administrative division
     * 
     * @var string
     */
    const ADM1H = 'ADM1H';

    /**
     * Second-order administrative division
     * 
     * A subdivision of a first-order administrative division
     * 
     * @var string
     */
    const ADM2 = 'ADM2';

    /**
     * Historical second-order administrative division
     * 
     * A former second-order administrative division
     * 
     * @var string
     */
    const ADM2H = 'ADM2H';

    /**
     * Third-order administrative division
     * 
     * A subdivision of a second-order administrative division
     * 
     * @var string
     */
    const ADM3 = 'ADM3';

    /**
     * Historical third-order administrative division
     * 
     * A former third-order administrative division
     * 
     * @var string
     */
    const ADM3H = 'ADM3H';

    /**
     * Fourth-order administrative division
     * 
     * A subdivision of a third-order administrative division
     * 
     * @var string
     */
    const ADM4 = 'ADM4';

    /**
     * Historical fourth-order administrative division
     * 
     * A former fourth-order administrative division
     * 
     * @var string
     */
    const ADM4H = 'ADM4H';

    /**
     * Fifth-order administrative division
     * 
     * A subdivision of a fourth-order administrative division
     * 
     * @var string
     */
    const ADM5 = 'ADM5';

    /**
     * Administrative division
     * 
     * An administrative division of a country, undifferentiated as to administrative level
     * 
     * @var string
     */
    const ADMD = 'ADMD';

    /**
     * Historical administrative division
     * 
     * A former administrative division of a political entity, undifferentiated as to administrative level
     * 
     * @var string
     */
    const ADMDH = 'ADMDH';

    /**
     * Leased area
     * 
     * A tract of land leased to another country, usually for military installations
     * 
     * @var string
     */
    const LTER = 'LTER';

    /**
     * Political entity
     * 
     * @var string
     */
    const PCL = 'PCL';

    /**
     * Dependent political entity
     * 
     * @var string
     */
    const PCLD = 'PCLD';

    /**
     * Freely associated state
     * 
     * @var string
     */
    const PCLF = 'PCLF';

    /**
     * Historical political entity
     * 
     * A former political entity
     * 
     * @var string
     */
    const PCLH = 'PCLH';

    /**
     * Independent political entity
     * 
     * @var string
     */
    const PCLI = 'PCLI';

    /**
     * Section of independent political entity
     * 
     * @var string
     */
    const PCLIX = 'PCLIX';

    /**
     * Semi-independent political entity
     * 
     * @var string
     */
    const PCLS = 'PCLS';

    /**
     * Parish
     * 
     * An ecclesiastical district
     * 
     * @var string
     */
    const PRSH = 'PRSH';

    /**
     * Territory
     * 
     * @var string
     */
    const TERR = 'TERR';

    /**
     * Zone
     * 
     * @var string
     */
    const ZN = 'ZN';

    /**
     * Buffer zone
     * 
     * A zone recognized as a buffer between two nations in which military presence is minimal or absent
     * 
     * @var string
     */
    const ZNB = 'ZNB';

    /**
     * Seaplane landing area
     * 
     * A place on a waterbody where floatplanes land and take off
     * 
     * @var string
     */
    const AIRS = 'AIRS';

    /**
     * Anchorage
     * 
     * An area where vessels may anchor
     * 
     * @var string
     */
    const ANCH = 'ANCH';

    /**
     * Bay
     * 
     * A coastal indentation between two capes or headlands, larger than a cove but smaller than a gulf
     * 
     * @var string
     */
    const BAY = 'BAY';

    /**
     * Bays
     * 
     * Coastal indentations between two capes or headlands, larger than a cove but smaller than a gulf
     * 
     * @var string
     */
    const BAYS = 'BAYS';

    /**
     * Bight(s)
     * 
     * An open body of water forming a slight recession in a coastline
     * 
     * @var string
     */
    const BGHT = 'BGHT';

    /**
     * Bank(s)
     * 
     * An elevation, typically located on a shelf, over which the depth of water is relatively shallow but sufficient for most surface navigation
     * 
     * @var string
     */
    const BNK = 'BNK';

    /**
     * Stream bank
     * 
     * A sloping margin of a stream channel which normally confines the stream to its channel on land
     * 
     * @var string
     */
    const BNKR = 'BNKR';

    /**
     * Section of bank
     * 
     * @var string
     */
    const BNKX = 'BNKX';

    /**
     * Bog(s)
     * 
     * A wetland characterized by peat forming sphagnum moss, sedge, and other acid-water plants
     * 
     * @var string
     */
    const BOG = 'BOG';

    /**
     * Icecap
     * 
     * A dome-shaped mass of glacial ice covering an area of mountain summits or other high lands; smaller than an ice sheet
     * 
     * @var string
     */
    const CAPG = 'CAPG';

    /**
     * Channel
     * 
     * The deepest part of a stream, bay, lagoon, or strait, through which the main current flows
     * 
     * @var string
     */
    const CHN = 'CHN';

    /**
     * Lake channel(s)
     * 
     * That part of a lake having water deep enough for navigation between islands, shoals, etc.
     * 
     * @var string
     */
    const CHNL = 'CHNL';

    /**
     * Marine channel
     * 
     * That part of a body of water deep enough for navigation through an area otherwise not suitable
     * 
     * @var string
     */
    const CHNM = 'CHNM';

    /**
     * Navigation channel
     * 
     * A buoyed channel of sufficient depth for the safe navigation of vessels
     * 
     * @var string
     */
    const CHNN = 'CHNN';

    /**
     * Confluence
     * 
     * A place where two or more streams or intermittent streams flow together
     * 
     * @var string
     */
    const CNFL = 'CNFL';

    /**
     * Canal
     * 
     * An artificial watercourse
     * 
     * @var string
     */
    const CNL = 'CNL';

    /**
     * Aqueduct
     * 
     * A conduit used to carry water
     * 
     * @var string
     */
    const CNLA = 'CNLA';

    /**
     * Canal bend
     * 
     * A conspicuously curved or bent section of a canal
     * 
     * @var string
     */
    const CNLB = 'CNLB';

    /**
     * Drainage canal
     * 
     * An artificial waterway carrying water away from a wetland or from drainage ditches
     * 
     * @var string
     */
    const CNLD = 'CNLD';

    /**
     * Irrigation canal
     * 
     * A canal which serves as a main conduit for irrigation water
     * 
     * @var string
     */
    const CNLI = 'CNLI';

    /**
     * Navigation canal(s)
     * 
     * A watercourse constructed for navigation of vessels
     * 
     * @var string
     */
    const CNLN = 'CNLN';

    /**
     * Abandoned canal
     * 
     * @var string
     */
    const CNLQ = 'CNLQ';

    /**
     * Underground irrigation canal(s)
     * 
     * A gently inclined underground tunnel bringing water for irrigation from aquifers
     * 
     * @var string
     */
    const CNLSB = 'CNLSB';

    /**
     * Section of canal
     * 
     * @var string
     */
    const CNLX = 'CNLX';

    /**
     * Cove(s)
     * 
     * A small coastal indentation, smaller than a bay
     * 
     * @var string
     */
    const COVE = 'COVE';

    /**
     * Tidal creek(s)
     * 
     * A meandering channel in a coastal wetland subject to bi-directional tidal currents
     * 
     * @var string
     */
    const CRKT = 'CRKT';

    /**
     * Current
     * 
     * A horizontal flow of water in a given direction with uniform velocity
     * 
     * @var string
     */
    const CRNT = 'CRNT';

    /**
     * Cutoff
     * 
     * A channel formed as a result of a stream cutting through a meander neck
     * 
     * @var string
     */
    const CUTF = 'CUTF';

    /**
     * Dock(s)
     * 
     * A waterway between two piers, or cut into the land for the berthing of ships
     * 
     * @var string
     */
    const DCK = 'DCK';

    /**
     * Docking basin
     * 
     * A part of a harbor where ships dock
     * 
     * @var string
     */
    const DCKB = 'DCKB';

    /**
     * Icecap dome
     * 
     * A comparatively elevated area on an icecap
     * 
     * @var string
     */
    const DOMG = 'DOMG';

    /**
     * Icecap depression
     * 
     * A comparatively depressed area on an icecap
     * 
     * @var string
     */
    const DPRG = 'DPRG';

    /**
     * Ditch
     * 
     * A small artificial watercourse dug for draining or irrigating the land
     * 
     * @var string
     */
    const DTCH = 'DTCH';

    /**
     * Drainage ditch
     * 
     * A ditch which serves to drain the land
     * 
     * @var string
     */
    const DTCHD = 'DTCHD';

    /**
     * Irrigation ditch
     * 
     * A ditch which serves to distribute irrigation water
     * 
     * @var string
     */
    const DTCHI = 'DTCHI';

    /**
     * Ditch mouth(s)
     * 
     * An area where a drainage ditch enters a lagoon, lake or bay
     * 
     * @var string
     */
    const DTCHM = 'DTCHM';

    /**
     * Estuary
     * 
     * A funnel-shaped stream mouth or embayment where fresh water mixes with sea water under tidal influences
     * 
     * @var string
     */
    const ESTY = 'ESTY';

    /**
     * Fishing area
     * 
     * A fishing ground, bank or area where fishermen go to catch fish
     * 
     * @var string
     */
    const FISH = 'FISH';

    /**
     * Fjord
     * 
     * A long, narrow, steep-walled, deep-water arm of the sea at high latitudes, usually along mountainous coasts
     * 
     * @var string
     */
    const FJD = 'FJD';

    /**
     * Fjords
     * 
     * Long, narrow, steep-walled, deep-water arms of the sea at high latitudes, usually along mountainous coasts
     * 
     * @var string
     */
    const FJDS = 'FJDS';

    /**
     * Waterfall(s)
     * 
     * A perpendicular or very steep descent of the water of a stream
     * 
     * @var string
     */
    const FLLS = 'FLLS';

    /**
     * Section of waterfall(s)
     * 
     * @var string
     */
    const FLLSX = 'FLLSX';

    /**
     * Mud flat(s)
     * 
     * A relatively level area of mud either between high and low tide lines, or subject to flooding
     * 
     * @var string
     */
    const FLTM = 'FLTM';

    /**
     * Tidal flat(s)
     * 
     * A large flat area of mud or sand attached to the shore and alternately covered and uncovered by the tide
     * 
     * @var string
     */
    const FLTT = 'FLTT';

    /**
     * Glacier(s)
     * 
     * A mass of ice, usually at high latitudes or high elevations, with sufficient thickness to flow away from the source area in lobes, tongues, or masses
     * 
     * @var string
     */
    const GLCR = 'GLCR';

    /**
     * Gulf
     * 
     * A large recess in the coastline, larger than a bay
     * 
     * @var string
     */
    const GULF = 'GULF';

    /**
     * Geyser
     * 
     * A type of hot spring with intermittent eruptions of jets of hot water and steam
     * 
     * @var string
     */
    const GYSR = 'GYSR';

    /**
     * Harbor(s)
     * 
     * A haven or space of deep water so sheltered by the adjacent land as to afford a safe anchorage for ships
     * 
     * @var string
     */
    const HBR = 'HBR';

    /**
     * Section of harbor
     * 
     * @var string
     */
    const HBRX = 'HBRX';

    /**
     * Inlet
     * 
     * A narrow waterway extending into the land, or connecting a bay or lagoon with a larger body of water
     * 
     * @var string
     */
    const INLT = 'INLT';

    /**
     * Former inlet
     * 
     * An inlet which has been filled in, or blocked by deposits
     * 
     * @var string
     */
    const INLTQ = 'INLTQ';

    /**
     * Lake bed(s)
     * 
     * A dried up or drained area of a former lake
     * 
     * @var string
     */
    const LBED = 'LBED';

    /**
     * Lagoon
     * 
     * A shallow coastal waterbody, completely or partly separated from a larger body of water by a barrier island, coral reef or other depositional feature
     * 
     * @var string
     */
    const LGN = 'LGN';

    /**
     * Lagoons
     * 
     * Shallow coastal waterbodies, completely or partly separated from a larger body of water by a barrier island, coral reef or other depositional feature
     * 
     * @var string
     */
    const LGNS = 'LGNS';

    /**
     * Section of lagoon
     * 
     * @var string
     */
    const LGNX = 'LGNX';

    /**
     * Lake
     * 
     * A large inland body of standing water
     * 
     * @var string
     */
    const LK = 'LK';

    /**
     * Crater lake
     * 
     * A lake in a crater or caldera
     * 
     * @var string
     */
    const LKC = 'LKC';

    /**
     * Intermittent lake
     * 
     * @var string
     */
    const LKI = 'LKI';

    /**
     * Salt lake
     * 
     * An inland body of salt water with no outlet
     * 
     * @var string
     */
    const LKN = 'LKN';

    /**
     * Intermittent salt lake
     * 
     * @var string
     */
    const LKNI = 'LKNI';

    /**
     * Oxbow lake
     * 
     * A crescent-shaped lake commonly found adjacent to meandering streams
     * 
     * @var string
     */
    const LKO = 'LKO';

    /**
     * Intermittent oxbow lake
     * 
     * @var string
     */
    const LKOI = 'LKOI';

    /**
     * Lakes
     * 
     * Large inland bodies of standing water
     * 
     * @var string
     */
    const LKS = 'LKS';

    /**
     * Underground lake
     * 
     * A standing body of water in a cave
     * 
     * @var string
     */
    const LKSB = 'LKSB';

    /**
     * Crater lakes
     * 
     * Lakes in a crater or caldera
     * 
     * @var string
     */
    const LKSC = 'LKSC';

    /**
     * Intermittent lakes
     * 
     * @var string
     */
    const LKSI = 'LKSI';

    /**
     * Salt lakes
     * 
     * Inland bodies of salt water with no outlet
     * 
     * @var string
     */
    const LKSN = 'LKSN';

    /**
     * Intermittent salt lakes
     * 
     * @var string
     */
    const LKSNI = 'LKSNI';

    /**
     * Section of lake
     * 
     * @var string
     */
    const LKX = 'LKX';

    /**
     * Salt evaporation ponds
     * 
     * Diked salt ponds used in the production of solar evaporated salt
     * 
     * @var string
     */
    const MFGN = 'MFGN';

    /**
     * Mangrove swamp
     * 
     * A tropical tidal mud flat characterized by mangrove vegetation
     * 
     * @var string
     */
    const MGV = 'MGV';

    /**
     * Moor(s)
     * 
     * An area of open ground overlaid with wet peaty soils
     * 
     * @var string
     */
    const MOOR = 'MOOR';

    /**
     * Marsh(es)
     * 
     * A wetland dominated by grass-like vegetation
     * 
     * @var string
     */
    const MRSH = 'MRSH';

    /**
     * Salt marsh
     * 
     * A flat area, subject to periodic salt water inundation, dominated by grassy salt-tolerant plants
     * 
     * @var string
     */
    const MRSHN = 'MRSHN';

    /**
     * Narrows
     * 
     * A navigable narrow part of a bay, strait, river, etc.
     * 
     * @var string
     */
    const NRWS = 'NRWS';

    /**
     * Ocean
     * 
     * One of the major divisions of the vast expanse of salt water covering part of the earth
     * 
     * @var string
     */
    const OCN = 'OCN';

    /**
     * Overfalls
     * 
     * An area of breaking waves caused by the meeting of currents or by waves moving against the current
     * 
     * @var string
     */
    const OVF = 'OVF';

    /**
     * Pond
     * 
     * A small standing waterbody
     * 
     * @var string
     */
    const PND = 'PND';

    /**
     * Intermittent pond
     * 
     * @var string
     */
    const PNDI = 'PNDI';

    /**
     * Salt pond
     * 
     * A small standing body of salt water often in a marsh or swamp, usually along a seacoast
     * 
     * @var string
     */
    const PNDN = 'PNDN';

    /**
     * Intermittent salt pond(s)
     * 
     * @var string
     */
    const PNDNI = 'PNDNI';

    /**
     * Ponds
     * 
     * Small standing waterbodies
     * 
     * @var string
     */
    const PNDS = 'PNDS';

    /**
     * Fishponds
     * 
     * Ponds or enclosures in which fish are kept or raised
     * 
     * @var string
     */
    const PNDSF = 'PNDSF';

    /**
     * Intermittent ponds
     * 
     * @var string
     */
    const PNDSI = 'PNDSI';

    /**
     * Salt ponds
     * 
     * Small standing bodies of salt water often in a marsh or swamp, usually along a seacoast
     * 
     * @var string
     */
    const PNDSN = 'PNDSN';

    /**
     * Pool(s)
     * 
     * A small and comparatively still, deep part of a larger body of water such as a stream or harbor; or a small body of standing water
     * 
     * @var string
     */
    const POOL = 'POOL';

    /**
     * Intermittent pool
     * 
     * @var string
     */
    const POOLI = 'POOLI';

    /**
     * Reach
     * 
     * A straight section of a navigable stream or channel between two bends
     * 
     * @var string
     */
    const RCH = 'RCH';

    /**
     * Icecap ridge
     * 
     * A linear elevation on an icecap
     * 
     * @var string
     */
    const RDGG = 'RDGG';

    /**
     * Roadstead
     * 
     * An open anchorage affording less protection than a harbor
     * 
     * @var string
     */
    const RDST = 'RDST';

    /**
     * Reef(s)
     * 
     * A surface-navigation hazard composed of consolidated material
     * 
     * @var string
     */
    const RF = 'RF';

    /**
     * Coral reef(s)
     * 
     * A surface-navigation hazard composed of coral
     * 
     * @var string
     */
    const RFC = 'RFC';

    /**
     * Section of reef
     * 
     * @var string
     */
    const RFX = 'RFX';

    /**
     * Rapids
     * 
     * A turbulent section of a stream associated with a steep, irregular stream bed
     * 
     * @var string
     */
    const RPDS = 'RPDS';

    /**
     * Reservoir(s)
     * 
     * An artificial pond or lake
     * 
     * @var string
     */
    const RSV = 'RSV';

    /**
     * Intermittent reservoir
     * 
     * @var string
     */
    const RSVI = 'RSVI';

    /**
     * Water tank
     * 
     * A contained pool or tank of water at, below, or above ground level
     * 
     * @var string
     */
    const RSVT = 'RSVT';

    /**
     * Ravine(s)
     * 
     * A small, narrow, deep, steep-sided stream channel, smaller than a gorge
     * 
     * @var string
     */
    const RVN = 'RVN';

    /**
     * Sabkha(s)
     * 
     * A salt flat or salt encrusted plain subject to periodic inundation from flooding or high tides
     * 
     * @var string
     */
    const SBKH = 'SBKH';

    /**
     * Sound
     * 
     * A long arm of the sea forming a channel between the mainland and an island or islands; or connecting two larger bodies of water
     * 
     * @var string
     */
    const SD = 'SD';

    /**
     * Sea
     * 
     * A large body of salt water more or less confined by continuous land or chains of islands forming a subdivision of an ocean
     * 
     * @var string
     */
    const SEA = 'SEA';

    /**
     * Shoal(s)
     * 
     * A surface-navigation hazard composed of unconsolidated material
     * 
     * @var string
     */
    const SHOL = 'SHOL';

    /**
     * Sill
     * 
     * The low part of an underwater gap or saddle separating basins, including a similar feature at the mouth of a fjord
     * 
     * @var string
     */
    const SILL = 'SILL';

    /**
     * Spring(s)
     * 
     * A place where ground water flows naturally out of the ground
     * 
     * @var string
     */
    const SPNG = 'SPNG';

    /**
     * Sulphur spring(s)
     * 
     * A place where sulphur ground water flows naturally out of the ground
     * 
     * @var string
     */
    const SPNS = 'SPNS';

    /**
     * Hot spring(s)
     * 
     * A place where hot ground water flows naturally out of the ground
     * 
     * @var string
     */
    const SPNT = 'SPNT';

    /**
     * Stream
     * 
     * A body of running water moving to a lower level in a channel on land
     * 
     * @var string
     */
    const STM = 'STM';

    /**
     * Anabranch
     * 
     * A diverging branch flowing out of a main stream and rejoining it downstream
     * 
     * @var string
     */
    const STMA = 'STMA';

    /**
     * Stream bend
     * 
     * A conspicuously curved or bent segment of a stream
     * 
     * @var string
     */
    const STMB = 'STMB';

    /**
     * Canalized stream
     * 
     * A stream that has been substantially ditched, diked, or straightened
     * 
     * @var string
     */
    const STMC = 'STMC';

    /**
     * Distributary(-ies)
     * 
     * A branch which flows away from the main stream, as in a delta or irrigation canal
     * 
     * @var string
     */
    const STMD = 'STMD';

    /**
     * Headwaters
     * 
     * The source and upper part of a stream, including the upper drainage basin
     * 
     * @var string
     */
    const STMH = 'STMH';

    /**
     * Intermittent stream
     * 
     * @var string
     */
    const STMI = 'STMI';

    /**
     * Section of intermittent stream
     * 
     * @var string
     */
    const STMIX = 'STMIX';

    /**
     * Stream mouth(s)
     * 
     * A place where a stream discharges into a lagoon, lake, or the sea
     * 
     * @var string
     */
    const STMM = 'STMM';

    /**
     * Abandoned watercourse
     * 
     * A former stream or distributary no longer carrying flowing water, but still evident due to lakes, wetland, topographic or vegetation patterns
     * 
     * @var string
     */
    const STMQ = 'STMQ';

    /**
     * Streams
     * 
     * Bodies of running water moving to a lower level in a channel on land
     * 
     * @var string
     */
    const STMS = 'STMS';

    /**
     * Lost river
     * 
     * A surface stream that disappears into an underground channel, or dries up in an arid area
     * 
     * @var string
     */
    const STMSB = 'STMSB';

    /**
     * Section of stream
     * 
     * @var string
     */
    const STMX = 'STMX';

    /**
     * Strait
     * 
     * A relatively narrow waterway, usually narrower and less extensive than a sound, connecting two larger bodies of water
     * 
     * @var string
     */
    const STRT = 'STRT';

    /**
     * Swamp
     * 
     * A wetland dominated by tree vegetation
     * 
     * @var string
     */
    const SWMP = 'SWMP';

    /**
     * Irrigation system
     * 
     * A network of ditches and one or more of the following elements: water supply, reservoir, canal, pump, well, drain, etc.
     * 
     * @var string
     */
    const SYSI = 'SYSI';

    /**
     * Canal tunnel
     * 
     * A tunnel through which a canal passes
     * 
     * @var string
     */
    const TNLC = 'TNLC';

    /**
     * Wadi
     * 
     * A valley or ravine, bounded by relatively steep banks, which in the rainy season becomes a watercourse; found primarily in North Africa and the Middle East
     * 
     * @var string
     */
    const WAD = 'WAD';

    /**
     * Wadi bend
     * 
     * A conspicuously curved or bent segment of a wadi
     * 
     * @var string
     */
    const WADB = 'WADB';

    /**
     * Wadi junction
     * 
     * A place where two or more wadies join
     * 
     * @var string
     */
    const WADJ = 'WADJ';

    /**
     * Wadi mouth
     * 
     * The lower terminus of a wadi where it widens into an adjoining floodplain, depression, or waterbody
     * 
     * @var string
     */
    const WADM = 'WADM';

    /**
     * Wadies
     * 
     * Valleys or ravines, bounded by relatively steep banks, which in the rainy season become watercourses; found primarily in North Africa and the Middle East
     * 
     * @var string
     */
    const WADS = 'WADS';

    /**
     * Section of wadi
     * 
     * @var string
     */
    const WADX = 'WADX';

    /**
     * Whirlpool
     * 
     * A turbulent, rotating movement of water in a stream
     * 
     * @var string
     */
    const WHRL = 'WHRL';

    /**
     * Well
     * 
     * A cylindrical hole, pit, or tunnel drilled or dug down to a depth from which water, oil, or gas can be pumped or brought to the surface
     * 
     * @var string
     */
    const WLL = 'WLL';

    /**
     * Abandoned well
     * 
     * @var string
     */
    const WLLQ = 'WLLQ';

    /**
     * Wells
     * 
     * Cylindrical holes, pits, or tunnels drilled or dug down to a depth from which water, oil, or gas can be pumped or brought to the surface
     * 
     * @var string
     */
    const WLLS = 'WLLS';

    /**
     * Wetland
     * 
     * An area subject to inundation, usually characterized by bog, marsh, or swamp vegetation
     * 
     * @var string
     */
    const WTLD = 'WTLD';

    /**
     * Intermittent wetland
     * 
     * @var string
     */
    const WTLDI = 'WTLDI';

    /**
     * Watercourse
     * 
     * A natural, well-defined channel produced by flowing water, or an artificial channel designed to carry flowing water
     * 
     * @var string
     */
    const WTRC = 'WTRC';

    /**
     * Waterhole(s)
     * 
     * A natural hole, hollow, or small depression that contains water, used by man and animals, especially in arid areas
     * 
     * @var string
     */
    const WTRH = 'WTRH';

    /**
     * Agricultural colony
     * 
     * A tract of land set aside for agricultural settlement
     * 
     * @var string
     */
    const AGRC = 'AGRC';

    /**
     * Amusement park
     * 
     * Amusement Park are theme parks, adventure parks offering entertainment, similar to funfairs but with a fix location
     * 
     * @var string
     */
    const AMUS = 'AMUS';

    /**
     * Area
     * 
     * A tract of land without homogeneous character or boundaries
     * 
     * @var string
     */
    const AREA = 'AREA';

    /**
     * Drainage basin
     * 
     * An area drained by a stream
     * 
     * @var string
     */
    const BSND = 'BSND';

    /**
     * Petroleum basin
     * 
     * An area underlain by an oil-rich structural basin
     * 
     * @var string
     */
    const BSNP = 'BSNP';

    /**
     * Battlefield
     * 
     * A site of a land battle of historical importance
     * 
     * @var string
     */
    const BTL = 'BTL';

    /**
     * Clearing
     * 
     * An area in a forest with trees removed
     * 
     * @var string
     */
    const CLG = 'CLG';

    /**
     * Common
     * 
     * A park or pasture for community use
     * 
     * @var string
     */
    const CMN = 'CMN';

    /**
     * Concession area
     * 
     * A lease of land by a government for economic development, e.g., mining, forestry
     * 
     * @var string
     */
    const CNS = 'CNS';

    /**
     * Coalfield
     * 
     * A region in which coal deposits of possible economic value occur
     * 
     * @var string
     */
    const COLF = 'COLF';

    /**
     * Continent
     * 
     * Continent: Europe, Africa, Asia, North America, South America, Oceania, Antarctica
     * 
     * @var string
     */
    const CONT = 'CONT';

    /**
     * Coast
     * 
     * A zone of variable width straddling the shoreline
     * 
     * @var string
     */
    const CST = 'CST';

    /**
     * Business center
     * 
     * A place where a number of businesses are located
     * 
     * @var string
     */
    const CTRB = 'CTRB';

    /**
     * Housing development
     * 
     * A tract of land on which many houses of similar design are built according to a development plan
     * 
     * @var string
     */
    const DEVH = 'DEVH';

    /**
     * Field(s)
     * 
     * An open as opposed to wooded area
     * 
     * @var string
     */
    const FLD = 'FLD';

    /**
     * Irrigated field(s)
     * 
     * A tract of level or terraced land which is irrigated
     * 
     * @var string
     */
    const FLDI = 'FLDI';

    /**
     * Gasfield
     * 
     * An area containing a subterranean store of natural gas of economic value
     * 
     * @var string
     */
    const GASF = 'GASF';

    /**
     * Grazing area
     * 
     * An area of grasses and shrubs used for grazing
     * 
     * @var string
     */
    const GRAZ = 'GRAZ';

    /**
     * Gravel area
     * 
     * An area covered with gravel
     * 
     * @var string
     */
    const GVL = 'GVL';

    /**
     * Industrial area
     * 
     * An area characterized by industrial activity
     * 
     * @var string
     */
    const INDS = 'INDS';

    /**
     * Arctic land
     * 
     * A tract of land in the Arctic
     * 
     * @var string
     */
    const LAND = 'LAND';

    /**
     * Locality
     * 
     * A minor area or place of unspecified or mixed character and indefinite boundaries
     * 
     * @var string
     */
    const LCTY = 'LCTY';

    /**
     * Military base
     * 
     * A place used by an army or other armed service for storing arms and supplies, and for accommodating and training troops, a base from which operations can be initiated
     * 
     * @var string
     */
    const MILB = 'MILB';

    /**
     * Mining area
     * 
     * An area of mine sites where minerals and ores are extracted
     * 
     * @var string
     */
    const MNA = 'MNA';

    /**
     * Maneuver area
     * 
     * A tract of land where military field exercises are carried out
     * 
     * @var string
     */
    const MVA = 'MVA';

    /**
     * Naval base
     * 
     * An area used to store supplies, provide barracks for troops and naval personnel, a port for naval vessels, and from which operations are initiated
     * 
     * @var string
     */
    const NVB = 'NVB';

    /**
     * Oasis(-es)
     * 
     * An area in a desert made productive by the availability of water
     * 
     * @var string
     */
    const OAS = 'OAS';

    /**
     * Oilfield
     * 
     * An area containing a subterranean store of petroleum of economic value
     * 
     * @var string
     */
    const OILF = 'OILF';

    /**
     * Peat cutting area
     * 
     * An area where peat is harvested
     * 
     * @var string
     */
    const PEAT = 'PEAT';

    /**
     * Park
     * 
     * An area, often of forested land, maintained as a place of beauty, or for recreation
     * 
     * @var string
     */
    const PRK = 'PRK';

    /**
     * Port
     * 
     * A place provided with terminal and transfer facilities for loading and discharging waterborne cargo or passengers, usually located in a harbor
     * 
     * @var string
     */
    const PRT = 'PRT';

    /**
     * Quicksand
     * 
     * An area where loose sand with water moving through it may become unstable when heavy objects are placed at the surface, causing them to sink
     * 
     * @var string
     */
    const QCKS = 'QCKS';

    /**
     * Reserve
     * 
     * A tract of public land reserved for future use or restricted as to use
     * 
     * @var string
     */
    const RES = 'RES';

    /**
     * Agricultural reserve
     * 
     * A tract of land reserved for agricultural reclamation and/or development
     * 
     * @var string
     */
    const RESA = 'RESA';

    /**
     * Forest reserve
     * 
     * A forested area set aside for preservation or controlled use
     * 
     * @var string
     */
    const RESF = 'RESF';

    /**
     * Hunting reserve
     * 
     * A tract of land used primarily for hunting
     * 
     * @var string
     */
    const RESH = 'RESH';

    /**
     * Nature reserve
     * 
     * An area reserved for the maintenance of a natural habitat
     * 
     * @var string
     */
    const RESN = 'RESN';

    /**
     * Palm tree reserve
     * 
     * An area of palm trees where use is controlled
     * 
     * @var string
     */
    const RESP = 'RESP';

    /**
     * Reservation
     * 
     * A tract of land set aside for aboriginal, tribal, or native populations
     * 
     * @var string
     */
    const RESV = 'RESV';

    /**
     * Wildlife reserve
     * 
     * A tract of public land reserved for the preservation of wildlife
     * 
     * @var string
     */
    const RESW = 'RESW';

    /**
     * Region
     * 
     * An area distinguished by one or more observable physical or cultural characteristics
     * 
     * @var string
     */
    const RGN = 'RGN';

    /**
     * Economic region
     * 
     * A region of a country established for economic development or for statistical purposes
     * 
     * @var string
     */
    const RGNE = 'RGNE';

    /**
     * Historical region
     * 
     * A former historic area distinguished by one or more observable physical or cultural characteristics
     * 
     * @var string
     */
    const RGNH = 'RGNH';

    /**
     * Lake region
     * 
     * A tract of land distinguished by numerous lakes
     * 
     * @var string
     */
    const RGNL = 'RGNL';

    /**
     * Artillery range
     * 
     * A tract of land used for artillery firing practice
     * 
     * @var string
     */
    const RNGA = 'RNGA';

    /**
     * Salt area
     * 
     * A shallow basin or flat where salt accumulates after periodic inundation
     * 
     * @var string
     */
    const SALT = 'SALT';

    /**
     * Snowfield
     * 
     * An area of permanent snow and ice forming the accumulation area of a glacier
     * 
     * @var string
     */
    const SNOW = 'SNOW';

    /**
     * Tribal area
     * 
     * A tract of land used by nomadic or other tribes
     * 
     * @var string
     */
    const TRB = 'TRB';

    /**
     * Populated place
     * 
     * A city, town, village, or other agglomeration of buildings where people live and work
     * 
     * @var string
     */
    const PPL = 'PPL';

    /**
     * Seat of a first-order administrative division
     * 
     * Seat of a first-order administrative division (PPLC takes precedence over PPLA)
     * 
     * @var string
     */
    const PPLA = 'PPLA';

    /**
     * Seat of a second-order administrative division
     * 
     * @var string
     */
    const PPLA2 = 'PPLA2';

    /**
     * Seat of a third-order administrative division
     * 
     * @var string
     */
    const PPLA3 = 'PPLA3';

    /**
     * Seat of a fourth-order administrative division
     * 
     * @var string
     */
    const PPLA4 = 'PPLA4';

    /**
     * Capital of a political entity
     * 
     * @var string
     */
    const PPLC = 'PPLC';

    /**
     * Historical capital of a political entity
     * 
     * A former capital of a political entity
     * 
     * @var string
     */
    const PPLCH = 'PPLCH';

    /**
     * Farm village
     * 
     * A populated place where the population is largely engaged in agricultural activities
     * 
     * @var string
     */
    const PPLF = 'PPLF';

    /**
     * Seat of government of a political entity
     * 
     * @var string
     */
    const PPLG = 'PPLG';

    /**
     * Historical populated place
     * 
     * A populated place that no longer exists
     * 
     * @var string
     */
    const PPLH = 'PPLH';

    /**
     * Populated locality
     * 
     * An area similar to a locality but with a small group of dwellings or other buildings
     * 
     * @var string
     */
    const PPLL = 'PPLL';

    /**
     * Abandoned populated place
     * 
     * @var string
     */
    const PPLQ = 'PPLQ';

    /**
     * Religious populated place
     * 
     * A populated place whose population is largely engaged in religious occupations
     * 
     * @var string
     */
    const PPLR = 'PPLR';

    /**
     * Populated places
     * 
     * Cities, towns, villages, or other agglomerations of buildings where people live and work
     * 
     * @var string
     */
    const PPLS = 'PPLS';

    /**
     * Destroyed populated place
     * 
     * A village, town or city destroyed by a natural disaster, or by war
     * 
     * @var string
     */
    const PPLW = 'PPLW';

    /**
     * Section of populated place
     * 
     * @var string
     */
    const PPLX = 'PPLX';

    /**
     * Israeli settlement
     * 
     * @var string
     */
    const STLMT = 'STLMT';

    /**
     * Causeway
     * 
     * A raised roadway across wet ground or shallow water
     * 
     * @var string
     */
    const CSWY = 'CSWY';

    /**
     * Oil pipeline
     * 
     * A pipeline used for transporting oil
     * 
     * @var string
     */
    const OILP = 'OILP';

    /**
     * Promenade
     * 
     * A place for public walking, usually along a beach front
     * 
     * @var string
     */
    const PRMN = 'PRMN';

    /**
     * Portage
     * 
     * A place where boats, goods, etc., are carried overland between navigable waters
     * 
     * @var string
     */
    const PTGE = 'PTGE';

    /**
     * Road
     * 
     * An open way with improved surface for transportation of animals, people and vehicles
     * 
     * @var string
     */
    const RD = 'RD';

    /**
     * Ancient road
     * 
     * The remains of a road used by ancient cultures
     * 
     * @var string
     */
    const RDA = 'RDA';

    /**
     * Road bend
     * 
     * A conspicuously curved or bent section of a road
     * 
     * @var string
     */
    const RDB = 'RDB';

    /**
     * Road cut
     * 
     * An excavation cut through a hill or ridge for a road
     * 
     * @var string
     */
    const RDCUT = 'RDCUT';

    /**
     * Road junction
     * 
     * A place where two or more roads join
     * 
     * @var string
     */
    const RDJCT = 'RDJCT';

    /**
     * Railroad junction
     * 
     * A place where two or more railroad tracks join
     * 
     * @var string
     */
    const RJCT = 'RJCT';

    /**
     * Railroad
     * 
     * A permanent twin steel-rail track on which freight and passenger cars move long distances
     * 
     * @var string
     */
    const RR = 'RR';

    /**
     * Abandoned railroad
     * 
     * @var string
     */
    const RRQ = 'RRQ';

    /**
     * Caravan route
     * 
     * The route taken by caravans
     * 
     * @var string
     */
    const RTE = 'RTE';

    /**
     * Railroad yard
     * 
     * A system of tracks used for the making up of trains, and switching and storing freight cars
     * 
     * @var string
     */
    const RYD = 'RYD';

    /**
     * Street
     * 
     * A paved urban thoroughfare
     * 
     * @var string
     */
    const ST = 'ST';

    /**
     * Stock route
     * 
     * A route taken by livestock herds
     * 
     * @var string
     */
    const STKR = 'STKR';

    /**
     * Tunnel
     * 
     * A subterranean passageway for transportation
     * 
     * @var string
     */
    const TNL = 'TNL';

    /**
     * Natural tunnel
     * 
     * A cave that is open at both ends
     * 
     * @var string
     */
    const TNLN = 'TNLN';

    /**
     * Road tunnel
     * 
     * A tunnel through which a road passes
     * 
     * @var string
     */
    const TNLRD = 'TNLRD';

    /**
     * Railroad tunnel
     * 
     * A tunnel through which a railroad passes
     * 
     * @var string
     */
    const TNLRR = 'TNLRR';

    /**
     * Tunnels
     * 
     * Subterranean passageways for transportation
     * 
     * @var string
     */
    const TNLS = 'TNLS';

    /**
     * Trail
     * 
     * A path, track, or route used by pedestrians, animals, or off-road vehicles
     * 
     * @var string
     */
    const TRL = 'TRL';

    /**
     * Administrative facility
     * 
     * A government building
     * 
     * @var string
     */
    const ADMF = 'ADMF';

    /**
     * Agricultural facility
     * 
     * A building and/or tract of land used for improving agriculture
     * 
     * @var string
     */
    const AGRF = 'AGRF';

    /**
     * Airbase
     * 
     * An area used to store supplies, provide barracks for air force personnel, hangars and runways for aircraft, and from which operations are initiated
     * 
     * @var string
     */
    const AIRB = 'AIRB';

    /**
     * Airfield
     * 
     * A place on land where aircraft land and take off; no facilities provided for the commercial handling of passengers and cargo
     * 
     * @var string
     */
    const AIRF = 'AIRF';

    /**
     * Heliport
     * 
     * A place where helicopters land and take off
     * 
     * @var string
     */
    const AIRH = 'AIRH';

    /**
     * Airport
     * 
     * A place where aircraft regularly land and take off, with runways, navigational aids, and major facilities for the commercial handling of passengers and cargo
     * 
     * @var string
     */
    const AIRP = 'AIRP';

    /**
     * Abandoned airfield
     * 
     * @var string
     */
    const AIRQ = 'AIRQ';

    /**
     * Amphitheater
     * 
     * An oval or circular structure with rising tiers of seats about a stage or open space
     * 
     * @var string
     */
    const AMTH = 'AMTH';

    /**
     * Ancient site
     * 
     * A place where archeological remains, old structures, or cultural artifacts are located
     * 
     * @var string
     */
    const ANS = 'ANS';

    /**
     * Aquaculture facility
     * 
     * Facility or area for the cultivation of aquatic animals and plants, especially fish, shellfish, and seaweed, in natural or controlled marine or freshwater environments; underwater agriculture
     * 
     * @var string
     */
    const AQC = 'AQC';

    /**
     * Arch
     * 
     * A natural or man-made structure in the form of an arch
     * 
     * @var string
     */
    const ARCH = 'ARCH';

    /**
     * Astronomical station
     * 
     * A point on the earth whose position has been determined by observations of celestial bodies
     * 
     * @var string
     */
    const ASTR = 'ASTR';

    /**
     * Asylum
     * 
     * A facility where the insane are cared for and protected
     * 
     * @var string
     */
    const ASYL = 'ASYL';

    /**
     * Athletic field
     * 
     * A tract of land used for playing team sports, and athletic track and field events
     * 
     * @var string
     */
    const ATHF = 'ATHF';

    /**
     * Automatic teller machine
     * 
     * An unattended electronic machine in a public place, connected to a data system and related equipment and activated by a bank customer to obtain cash withdrawals and other banking services.
     * 
     * @var string
     */
    const ATM = 'ATM';

    /**
     * Bank
     * 
     * A business establishment in which money is kept for saving or commercial purposes or is invested, supplied for loans, or exchanged.
     * 
     * @var string
     */
    const BANK = 'BANK';

    /**
     * Beacon
     * 
     * A fixed artificial navigation mark
     * 
     * @var string
     */
    const BCN = 'BCN';

    /**
     * Bridge
     * 
     * A structure erected across an obstacle such as a stream, road, etc., in order to carry roads, railroads, and pedestrians across
     * 
     * @var string
     */
    const BDG = 'BDG';

    /**
     * Ruined bridge
     * 
     * A destroyed or decayed bridge which is no longer functional
     * 
     * @var string
     */
    const BDGQ = 'BDGQ';

    /**
     * Building(s)
     * 
     * A structure built for permanent use, as a house, factory, etc.
     * 
     * @var string
     */
    const BLDG = 'BLDG';

    /**
     * Office building
     * 
     * Commercial building where business and/or services are conducted
     * 
     * @var string
     */
    const BLDO = 'BLDO';

    /**
     * Boundary marker
     * 
     * A fixture marking a point along a boundary
     * 
     * @var string
     */
    const BP = 'BP';

    /**
     * Barracks
     * 
     * A building for lodging military personnel
     * 
     * @var string
     */
    const BRKS = 'BRKS';

    /**
     * Breakwater
     * 
     * A structure erected to break the force of waves at the entrance to a harbor or port
     * 
     * @var string
     */
    const BRKW = 'BRKW';

    /**
     * Baling station
     * 
     * A facility for baling agricultural products
     * 
     * @var string
     */
    const BSTN = 'BSTN';

    /**
     * Boatyard
     * 
     * A waterside facility for servicing, repairing, and building small vessels
     * 
     * @var string
     */
    const BTYD = 'BTYD';

    /**
     * Burial cave(s)
     * 
     * A cave used for human burials
     * 
     * @var string
     */
    const BUR = 'BUR';

    /**
     * Bus station
     * 
     * A facility comprising ticket office, platforms, etc. for loading and unloading passengers
     * 
     * @var string
     */
    const BUSTN = 'BUSTN';

    /**
     * Bus stop
     * 
     * A place lacking station facilities
     * 
     * @var string
     */
    const BUSTP = 'BUSTP';

    /**
     * Cairn
     * 
     * A heap of stones erected as a landmark or for other purposes
     * 
     * @var string
     */
    const CARN = 'CARN';

    /**
     * Cave(s)
     * 
     * An underground passageway or chamber, or cavity on the side of a cliff
     * 
     * @var string
     */
    const CAVE = 'CAVE';

    /**
     * Church
     * 
     * A building for public Christian worship
     * 
     * @var string
     */
    const CH = 'CH';

    /**
     * Camp(s)
     * 
     * A site occupied by tents, huts, or other shelters for temporary use
     * 
     * @var string
     */
    const CMP = 'CMP';

    /**
     * Logging camp
     * 
     * A camp used by loggers
     * 
     * @var string
     */
    const CMPL = 'CMPL';

    /**
     * Labor camp
     * 
     * A camp used by migrant or temporary laborers
     * 
     * @var string
     */
    const CMPLA = 'CMPLA';

    /**
     * Mining camp
     * 
     * A camp used by miners
     * 
     * @var string
     */
    const CMPMN = 'CMPMN';

    /**
     * Oil camp
     * 
     * A camp used by oilfield workers
     * 
     * @var string
     */
    const CMPO = 'CMPO';

    /**
     * Abandoned camp
     * 
     * @var string
     */
    const CMPQ = 'CMPQ';

    /**
     * Refugee camp
     * 
     * A camp used by refugees
     * 
     * @var string
     */
    const CMPRF = 'CMPRF';

    /**
     * Cemetery
     * 
     * A burial place or ground
     * 
     * @var string
     */
    const CMTY = 'CMTY';

    /**
     * Communication center
     * 
     * A facility, including buildings, antennae, towers and electronic equipment for receiving and transmitting information
     * 
     * @var string
     */
    const COMC = 'COMC';

    /**
     * Corral(s)
     * 
     * A pen or enclosure for confining or capturing animals
     * 
     * @var string
     */
    const CRRL = 'CRRL';

    /**
     * Casino
     * 
     * A building used for entertainment, especially gambling
     * 
     * @var string
     */
    const CSNO = 'CSNO';

    /**
     * Castle
     * 
     * A large fortified building or set of buildings
     * 
     * @var string
     */
    const CSTL = 'CSTL';

    /**
     * Customs house
     * 
     * A building in a port where customs and duties are paid, and where vessels are entered and cleared
     * 
     * @var string
     */
    const CSTM = 'CSTM';

    /**
     * Courthouse
     * 
     * A building in which courts of law are held
     * 
     * @var string
     */
    const CTHSE = 'CTHSE';

    /**
     * Atomic center
     * 
     * A facility where atomic research is carried out
     * 
     * @var string
     */
    const CTRA = 'CTRA';

    /**
     * Community center
     * 
     * A facility for community recreation and other activities
     * 
     * @var string
     */
    const CTRCM = 'CTRCM';

    /**
     * Facility center
     * 
     * A place where more than one facility is situated
     * 
     * @var string
     */
    const CTRF = 'CTRF';

    /**
     * Medical center
     * 
     * A complex of health care buildings including two or more of the following: hospital, medical school, clinic, pharmacy, doctor's offices, etc.
     * 
     * @var string
     */
    const CTRM = 'CTRM';

    /**
     * Religious center
     * 
     * A facility where more than one religious activity is carried out, e.g., retreat, school, monastery, worship
     * 
     * @var string
     */
    const CTRR = 'CTRR';

    /**
     * Space center
     * 
     * A facility for launching, tracking, or controlling satellites and space vehicles
     * 
     * @var string
     */
    const CTRS = 'CTRS';

    /**
     * Convent
     * 
     * A building where a community of nuns lives in seclusion
     * 
     * @var string
     */
    const CVNT = 'CVNT';

    /**
     * Dam
     * 
     * A barrier constructed across a stream to impound water
     * 
     * @var string
     */
    const DAM = 'DAM';

    /**
     * Ruined dam
     * 
     * A destroyed or decayed dam which is no longer functional
     * 
     * @var string
     */
    const DAMQ = 'DAMQ';

    /**
     * Sub-surface dam
     * 
     * A dam put down to bedrock in a sand river
     * 
     * @var string
     */
    const DAMSB = 'DAMSB';

    /**
     * Dairy
     * 
     * A facility for the processing, sale and distribution of milk or milk products
     * 
     * @var string
     */
    const DARY = 'DARY';

    /**
     * Dry dock
     * 
     * A dock providing support for a vessel, and means for removing the water so that the bottom of the vessel can be exposed
     * 
     * @var string
     */
    const DCKD = 'DCKD';

    /**
     * Dockyard
     * 
     * A facility for servicing, building, or repairing ships
     * 
     * @var string
     */
    const DCKY = 'DCKY';

    /**
     * Dike
     * 
     * An earth or stone embankment usually constructed for flood or stream control
     * 
     * @var string
     */
    const DIKE = 'DIKE';

    /**
     * Diplomatic facility
     * 
     * Office, residence, or facility of a foreign government, which may include an embassy, consulate, chancery, office of charge d'affaires, or other diplomatic, economic, military, or cultural mission
     * 
     * @var string
     */
    const DIP = 'DIP';

    /**
     * Fuel depot
     * 
     * An area where fuel is stored
     * 
     * @var string
     */
    const DPOF = 'DPOF';

    /**
     * Estate(s)
     * 
     * A large commercialized agricultural landholding with associated buildings and other facilities
     * 
     * @var string
     */
    const EST = 'EST';

    /**
     * Oil palm plantation
     * 
     * An estate specializing in the cultivation of oil palm trees
     * 
     * @var string
     */
    const ESTO = 'ESTO';

    /**
     * Rubber plantation
     * 
     * An estate which specializes in growing and tapping rubber trees
     * 
     * @var string
     */
    const ESTR = 'ESTR';

    /**
     * Sugar plantation
     * 
     * An estate that specializes in growing sugar cane
     * 
     * @var string
     */
    const ESTSG = 'ESTSG';

    /**
     * Tea plantation
     * 
     * An estate which specializes in growing tea bushes
     * 
     * @var string
     */
    const ESTT = 'ESTT';

    /**
     * Section of estate
     * 
     * @var string
     */
    const ESTX = 'ESTX';

    /**
     * Facility
     * 
     * A building or buildings housing a center, institute, foundation, hospital, prison, mission, courthouse, etc.
     * 
     * @var string
     */
    const FCL = 'FCL';

    /**
     * Foundry
     * 
     * A building or works where metal casting is carried out
     * 
     * @var string
     */
    const FNDY = 'FNDY';

    /**
     * Farm
     * 
     * A tract of land with associated buildings devoted to agriculture
     * 
     * @var string
     */
    const FRM = 'FRM';

    /**
     * Abandoned farm
     * 
     * @var string
     */
    const FRMQ = 'FRMQ';

    /**
     * Farms
     * 
     * Tracts of land with associated buildings devoted to agriculture
     * 
     * @var string
     */
    const FRMS = 'FRMS';

    /**
     * Farmstead
     * 
     * The buildings and adjacent service areas of a farm
     * 
     * @var string
     */
    const FRMT = 'FRMT';

    /**
     * Fort
     * 
     * A defensive structure or earthworks
     * 
     * @var string
     */
    const FT = 'FT';

    /**
     * Ferry
     * 
     * A boat or other floating conveyance and terminal facilities regularly used to transport people and vehicles across a waterbody
     * 
     * @var string
     */
    const FY = 'FY';

    /**
     * Gate
     * 
     * A controlled access entrance or exit
     * 
     * @var string
     */
    const GATE = 'GATE';

    /**
     * Garden(s)
     * 
     * An enclosure for displaying selected plant or animal life
     * 
     * @var string
     */
    const GDN = 'GDN';

    /**
     * Ghat
     * 
     * A set of steps leading to a river, which are of religious significance, and at their base is usually a platform for bathing
     * 
     * @var string
     */
    const GHAT = 'GHAT';

    /**
     * Guest house
     * 
     * A house used to provide lodging for paying guests
     * 
     * @var string
     */
    const GHSE = 'GHSE';

    /**
     * Gas-oil separator plant
     * 
     * A facility for separating gas from oil
     * 
     * @var string
     */
    const GOSP = 'GOSP';

    /**
     * Local government office
     * 
     * A facility housing local governmental offices, usually a city, town, or village hall
     * 
     * @var string
     */
    const GOVL = 'GOVL';

    /**
     * Grave
     * 
     * A burial site
     * 
     * @var string
     */
    const GRVE = 'GRVE';

    /**
     * Hermitage
     * 
     * A secluded residence, usually for religious sects
     * 
     * @var string
     */
    const HERM = 'HERM';

    /**
     * Halting place
     * 
     * A place where caravans stop for rest
     * 
     * @var string
     */
    const HLT = 'HLT';

    /**
     * Homestead
     * 
     * A residence, owner's or manager's, on a sheep or cattle station, woolshed, outcamp, or Aboriginal outstation, specific to Australia and New Zealand
     * 
     * @var string
     */
    const HMSD = 'HMSD';

    /**
     * House(s)
     * 
     * A building used as a human habitation
     * 
     * @var string
     */
    const HSE = 'HSE';

    /**
     * Country house
     * 
     * A large house, mansion, or chateau, on a large estate
     * 
     * @var string
     */
    const HSEC = 'HSEC';

    /**
     * Hospital
     * 
     * A building in which sick or injured, especially those confined to bed, are medically treated
     * 
     * @var string
     */
    const HSP = 'HSP';

    /**
     * Clinic
     * 
     * A medical facility associated with a hospital for outpatients
     * 
     * @var string
     */
    const HSPC = 'HSPC';

    /**
     * Dispensary
     * 
     * A building where medical or dental aid is dispensed
     * 
     * @var string
     */
    const HSPD = 'HSPD';

    /**
     * Leprosarium
     * 
     * An asylum or hospital for lepers
     * 
     * @var string
     */
    const HSPL = 'HSPL';

    /**
     * Historical site
     * 
     * A place of historical importance
     * 
     * @var string
     */
    const HSTS = 'HSTS';

    /**
     * Hotel
     * 
     * A building providing lodging and/or meals for the public
     * 
     * @var string
     */
    const HTL = 'HTL';

    /**
     * Hut
     * 
     * A small primitive house
     * 
     * @var string
     */
    const HUT = 'HUT';

    /**
     * Huts
     * 
     * Small primitive houses
     * 
     * @var string
     */
    const HUTS = 'HUTS';

    /**
     * Military installation
     * 
     * A facility for use of and control by armed forces
     * 
     * @var string
     */
    const INSM = 'INSM';

    /**
     * Research institute
     * 
     * A facility where research is carried out
     * 
     * @var string
     */
    const ITTR = 'ITTR';

    /**
     * Jetty
     * 
     * A structure built out into the water at a river mouth or harbor entrance to regulate currents and silting
     * 
     * @var string
     */
    const JTY = 'JTY';

    /**
     * Landing
     * 
     * A place where boats receive or discharge passengers and freight, but lacking most port facilities
     * 
     * @var string
     */
    const LDNG = 'LDNG';

    /**
     * Leper colony
     * 
     * A settled area inhabited by lepers in relative isolation
     * 
     * @var string
     */
    const LEPC = 'LEPC';

    /**
     * Library
     * 
     * A place in which information resources such as books are kept for reading, reference, or lending.
     * 
     * @var string
     */
    const LIBR = 'LIBR';

    /**
     * Landfill
     * 
     * A place for trash and garbage disposal in which the waste is buried between layers of earth to build up low-lying land
     * 
     * @var string
     */
    const LNDF = 'LNDF';

    /**
     * Lock(s)
     * 
     * A basin in a waterway with gates at each end by means of which vessels are passed from one water level to another
     * 
     * @var string
     */
    const LOCK = 'LOCK';

    /**
     * Lighthouse
     * 
     * A distinctive structure exhibiting a major navigation light
     * 
     * @var string
     */
    const LTHSE = 'LTHSE';

    /**
     * Mall
     * 
     * A large, often enclosed shopping complex containing various stores, businesses, and restaurants usually accessible by common passageways.
     * 
     * @var string
     */
    const MALL = 'MALL';

    /**
     * Marina
     * 
     * A harbor facility for small boats, yachts, etc.
     * 
     * @var string
     */
    const MAR = 'MAR';

    /**
     * Factory
     * 
     * One or more buildings where goods are manufactured, processed or fabricated
     * 
     * @var string
     */
    const MFG = 'MFG';

    /**
     * Brewery
     * 
     * One or more buildings where beer is brewed
     * 
     * @var string
     */
    const MFGB = 'MFGB';

    /**
     * Cannery
     * 
     * A building where food items are canned
     * 
     * @var string
     */
    const MFGC = 'MFGC';

    /**
     * Copper works
     * 
     * A facility for processing copper ore
     * 
     * @var string
     */
    const MFGCU = 'MFGCU';

    /**
     * Limekiln
     * 
     * A furnace in which limestone is reduced to lime
     * 
     * @var string
     */
    const MFGLM = 'MFGLM';

    /**
     * Munitions plant
     * 
     * A factory where ammunition is made
     * 
     * @var string
     */
    const MFGM = 'MFGM';

    /**
     * Phosphate works
     * 
     * A facility for producing fertilizer
     * 
     * @var string
     */
    const MFGPH = 'MFGPH';

    /**
     * Abandoned factory
     * 
     * @var string
     */
    const MFGQ = 'MFGQ';

    /**
     * Sugar refinery
     * 
     * A facility for converting raw sugar into refined sugar
     * 
     * @var string
     */
    const MFGSG = 'MFGSG';

    /**
     * Market
     * 
     * A place where goods are bought and sold at regular intervals
     * 
     * @var string
     */
    const MKT = 'MKT';

    /**
     * Mill(s)
     * 
     * A building housing machines for transforming, shaping, finishing, grinding, or extracting products
     * 
     * @var string
     */
    const ML = 'ML';

    /**
     * Ore treatment plant
     * 
     * A facility for improving the metal content of ore by concentration
     * 
     * @var string
     */
    const MLM = 'MLM';

    /**
     * Olive oil mill
     * 
     * A mill where oil is extracted from olives
     * 
     * @var string
     */
    const MLO = 'MLO';

    /**
     * Sugar mill
     * 
     * A facility where sugar cane is processed into raw sugar
     * 
     * @var string
     */
    const MLSG = 'MLSG';

    /**
     * Former sugar mill
     * 
     * A sugar mill no longer used as a sugar mill
     * 
     * @var string
     */
    const MLSGQ = 'MLSGQ';

    /**
     * Sawmill
     * 
     * A mill where logs or lumber are sawn to specified shapes and sizes
     * 
     * @var string
     */
    const MLSW = 'MLSW';

    /**
     * Windmill
     * 
     * A mill or water pump powered by wind
     * 
     * @var string
     */
    const MLWND = 'MLWND';

    /**
     * Water mill
     * 
     * A mill powered by running water
     * 
     * @var string
     */
    const MLWTR = 'MLWTR';

    /**
     * Mine(s)
     * 
     * A site where mineral ores are extracted from the ground by excavating surface pits and subterranean passages
     * 
     * @var string
     */
    const MN = 'MN';

    /**
     * Gold mine(s)
     * 
     * A mine where gold ore, or alluvial gold is extracted
     * 
     * @var string
     */
    const MNAU = 'MNAU';

    /**
     * Coal mine(s)
     * 
     * A mine where coal is extracted
     * 
     * @var string
     */
    const MNC = 'MNC';

    /**
     * Chrome mine(s)
     * 
     * A mine where chrome ore is extracted
     * 
     * @var string
     */
    const MNCR = 'MNCR';

    /**
     * Copper mine(s)
     * 
     * A mine where copper ore is extracted
     * 
     * @var string
     */
    const MNCU = 'MNCU';

    /**
     * Iron mine(s)
     * 
     * A mine where iron ore is extracted
     * 
     * @var string
     */
    const MNFE = 'MNFE';

    /**
     * Monument
     * 
     * A commemorative structure or statue
     * 
     * @var string
     */
    const MNMT = 'MNMT';

    /**
     * Salt mine(s)
     * 
     * A mine from which salt is extracted
     * 
     * @var string
     */
    const MNN = 'MNN';

    /**
     * Abandoned mine
     * 
     * @var string
     */
    const MNQ = 'MNQ';

    /**
     * Quarry(-ies)
     * 
     * A surface mine where building stone or gravel and sand, etc. are extracted
     * 
     * @var string
     */
    const MNQR = 'MNQR';

    /**
     * Mole
     * 
     * A massive structure of masonry or large stones serving as a pier or breakwater
     * 
     * @var string
     */
    const MOLE = 'MOLE';

    /**
     * Mosque
     * 
     * A building for public Islamic worship
     * 
     * @var string
     */
    const MSQE = 'MSQE';

    /**
     * Mission
     * 
     * A place characterized by dwellings, school, church, hospital and other facilities operated by a religious group for the purpose of providing charitable services and to propagate religion
     * 
     * @var string
     */
    const MSSN = 'MSSN';

    /**
     * Abandoned mission
     * 
     * @var string
     */
    const MSSNQ = 'MSSNQ';

    /**
     * Monastery
     * 
     * A building and grounds where a community of monks lives in seclusion
     * 
     * @var string
     */
    const MSTY = 'MSTY';

    /**
     * Metro station
     * 
     * Metro station (Underground, Tube, or Metro)
     * 
     * @var string
     */
    const MTRO = 'MTRO';

    /**
     * Museum
     * 
     * A building where objects of permanent interest in one or more of the arts and sciences are preserved and exhibited
     * 
     * @var string
     */
    const MUS = 'MUS';

    /**
     * Novitiate
     * 
     * A religious house or school where novices are trained
     * 
     * @var string
     */
    const NOV = 'NOV';

    /**
     * Nursery(-ies)
     * 
     * A place where plants are propagated for transplanting or grafting
     * 
     * @var string
     */
    const NSY = 'NSY';

    /**
     * Observation point
     * 
     * A wildlife or scenic observation point
     * 
     * @var string
     */
    const OBPT = 'OBPT';

    /**
     * Observatory
     * 
     * A facility equipped for observation of atmospheric or space phenomena
     * 
     * @var string
     */
    const OBS = 'OBS';

    /**
     * Radio observatory
     * 
     * A facility equipped with an array of antennae for receiving radio waves from space
     * 
     * @var string
     */
    const OBSR = 'OBSR';

    /**
     * Oil pipeline junction
     * 
     * A section of an oil pipeline where two or more pipes join together
     * 
     * @var string
     */
    const OILJ = 'OILJ';

    /**
     * Abandoned oil well
     * 
     * @var string
     */
    const OILQ = 'OILQ';

    /**
     * Oil refinery
     * 
     * A facility for converting crude oil into refined petroleum products
     * 
     * @var string
     */
    const OILR = 'OILR';

    /**
     * Tank farm
     * 
     * A tract of land occupied by large, cylindrical, metal tanks in which oil or liquid petrochemicals are stored
     * 
     * @var string
     */
    const OILT = 'OILT';

    /**
     * Oil well
     * 
     * A well from which oil may be pumped
     * 
     * @var string
     */
    const OILW = 'OILW';

    /**
     * Opera house
     * 
     * A theater designed chiefly for the performance of operas.
     * 
     * @var string
     */
    const OPRA = 'OPRA';

    /**
     * Palace
     * 
     * A large stately house, often a royal or presidential residence
     * 
     * @var string
     */
    const PAL = 'PAL';

    /**
     * Pagoda
     * 
     * A tower-like storied structure, usually a Buddhist shrine
     * 
     * @var string
     */
    const PGDA = 'PGDA';

    /**
     * Pier
     * 
     * A structure built out into navigable water on piles providing berthing for ships and recreation
     * 
     * @var string
     */
    const PIER = 'PIER';

    /**
     * Parking lot
     * 
     * An area used for parking vehicles
     * 
     * @var string
     */
    const PKLT = 'PKLT';

    /**
     * Oil pumping station
     * 
     * A facility for pumping oil through a pipeline
     * 
     * @var string
     */
    const PMPO = 'PMPO';

    /**
     * Water pumping station
     * 
     * A facility for pumping water from a major well or through a pipeline
     * 
     * @var string
     */
    const PMPW = 'PMPW';

    /**
     * Post office
     * 
     * A public building in which mail is received, sorted and distributed
     * 
     * @var string
     */
    const PO = 'PO';

    /**
     * Police post
     * 
     * A building in which police are stationed
     * 
     * @var string
     */
    const PP = 'PP';

    /**
     * Abandoned police post
     * 
     * @var string
     */
    const PPQ = 'PPQ';

    /**
     * Park gate
     * 
     * A controlled access to a park
     * 
     * @var string
     */
    const PRKGT = 'PRKGT';

    /**
     * Park headquarters
     * 
     * A park administrative facility
     * 
     * @var string
     */
    const PRKHQ = 'PRKHQ';

    /**
     * Prison
     * 
     * A facility for confining prisoners
     * 
     * @var string
     */
    const PRN = 'PRN';

    /**
     * Reformatory
     * 
     * A facility for confining, training, and reforming young law offenders
     * 
     * @var string
     */
    const PRNJ = 'PRNJ';

    /**
     * Abandoned prison
     * 
     * @var string
     */
    const PRNQ = 'PRNQ';

    /**
     * Power station
     * 
     * A facility for generating electric power
     * 
     * @var string
     */
    const PS = 'PS';

    /**
     * Hydroelectric power station
     * 
     * A building where electricity is generated from water power
     * 
     * @var string
     */
    const PSH = 'PSH';

    /**
     * Border post
     * 
     * A post or station at an international boundary for the regulation of movement of people and goods
     * 
     * @var string
     */
    const PSTB = 'PSTB';

    /**
     * Customs post
     * 
     * A building at an international boundary where customs and duties are paid on goods
     * 
     * @var string
     */
    const PSTC = 'PSTC';

    /**
     * Patrol post
     * 
     * A post from which patrols are sent out
     * 
     * @var string
     */
    const PSTP = 'PSTP';

    /**
     * Pyramid
     * 
     * An ancient massive structure of square ground plan with four triangular faces meeting at a point and used for enclosing tombs
     * 
     * @var string
     */
    const PYR = 'PYR';

    /**
     * Pyramids
     * 
     * Ancient massive structures of square ground plan with four triangular faces meeting at a point and used for enclosing tombs
     * 
     * @var string
     */
    const PYRS = 'PYRS';

    /**
     * Quay
     * 
     * A structure of solid construction along a shore or bank which provides berthing for ships and which generally provides cargo handling facilities
     * 
     * @var string
     */
    const QUAY = 'QUAY';

    /**
     * Traffic circle
     * 
     * A road junction formed around a central circle about which traffic moves in one direction only
     * 
     * @var string
     */
    const RDCR = 'RDCR';

    /**
     * Golf course
     * 
     * A recreation field where golf is played
     * 
     * @var string
     */
    const RECG = 'RECG';

    /**
     * Racetrack
     * 
     * A track where races are held
     * 
     * @var string
     */
    const RECR = 'RECR';

    /**
     * Restaurant
     * 
     * A place where meals are served to the public
     * 
     * @var string
     */
    const REST = 'REST';

    /**
     * Store
     * 
     * A building where goods and/or services are offered for sale
     * 
     * @var string
     */
    const RET = 'RET';

    /**
     * Resthouse
     * 
     * A structure maintained for the rest and shelter of travelers
     * 
     * @var string
     */
    const RHSE = 'RHSE';

    /**
     * Rookery
     * 
     * A breeding place of a colony of birds or seals
     * 
     * @var string
     */
    const RKRY = 'RKRY';

    /**
     * Religious site
     * 
     * An ancient site of significant religious importance
     * 
     * @var string
     */
    const RLG = 'RLG';

    /**
     * Retreat
     * 
     * A place of temporary seclusion, especially for religious groups
     * 
     * @var string
     */
    const RLGR = 'RLGR';

    /**
     * Ranch(es)
     * 
     * A large farm specializing in extensive grazing of livestock
     * 
     * @var string
     */
    const RNCH = 'RNCH';

    /**
     * Railroad siding
     * 
     * A short track parallel to and joining the main track
     * 
     * @var string
     */
    const RSD = 'RSD';

    /**
     * Railroad signal
     * 
     * A signal at the entrance of a particular section of track governing the movement of trains
     * 
     * @var string
     */
    const RSGNL = 'RSGNL';

    /**
     * Resort
     * 
     * A specialized facility for vacation, health, or participation sports activities
     * 
     * @var string
     */
    const RSRT = 'RSRT';

    /**
     * Railroad station
     * 
     * A facility comprising ticket office, platforms, etc. for loading and unloading train passengers and freight
     * 
     * @var string
     */
    const RSTN = 'RSTN';

    /**
     * Abandoned railroad station
     * 
     * @var string
     */
    const RSTNQ = 'RSTNQ';

    /**
     * Railroad stop
     * 
     * A place lacking station facilities where trains stop to pick up and unload passengers and freight
     * 
     * @var string
     */
    const RSTP = 'RSTP';

    /**
     * Abandoned railroad stop
     * 
     * @var string
     */
    const RSTPQ = 'RSTPQ';

    /**
     * Ruin(s)
     * 
     * A destroyed or decayed structure which is no longer functional
     * 
     * @var string
     */
    const RUIN = 'RUIN';

    /**
     * School
     * 
     * Building(s) where instruction in one or more branches of knowledge takes place
     * 
     * @var string
     */
    const SCH = 'SCH';

    /**
     * Agricultural school
     * 
     * A school with a curriculum focused on agriculture
     * 
     * @var string
     */
    const SCHA = 'SCHA';

    /**
     * College
     * 
     * The grounds and buildings of an institution of higher learning
     * 
     * @var string
     */
    const SCHC = 'SCHC';

    /**
     * Language school
     * 
     * Language Schools & Institutions
     * 
     * @var string
     */
    const SCHL = 'SCHL';

    /**
     * Military school
     * 
     * A school at which military science forms the core of the curriculum
     * 
     * @var string
     */
    const SCHM = 'SCHM';

    /**
     * Maritime school
     * 
     * A school at which maritime sciences form the core of the curriculum
     * 
     * @var string
     */
    const SCHN = 'SCHN';

    /**
     * Technical school
     * 
     * Post-secondary school with a specifically technical or vocational curriculum
     * 
     * @var string
     */
    const SCHT = 'SCHT';

    /**
     * State Exam Prep Centre
     * 
     * State exam preparation centres
     * 
     * @var string
     */
    const SECP = 'SECP';

    /**
     * Sheepfold
     * 
     * A fence or wall enclosure for sheep and other small herd animals
     * 
     * @var string
     */
    const SHPF = 'SHPF';

    /**
     * Shrine
     * 
     * A structure or place memorializing a person or religious concept
     * 
     * @var string
     */
    const SHRN = 'SHRN';

    /**
     * Storehouse
     * 
     * A building for storing goods, especially provisions
     * 
     * @var string
     */
    const SHSE = 'SHSE';

    /**
     * Sluice
     * 
     * A conduit or passage for carrying off surplus water from a waterbody, usually regulated by means of a sluice gate
     * 
     * @var string
     */
    const SLCE = 'SLCE';

    /**
     * Sanatorium
     * 
     * A facility where victims of physical or mental disorders are treated
     * 
     * @var string
     */
    const SNTR = 'SNTR';

    /**
     * Spa
     * 
     * A resort area usually developed around a medicinal spring
     * 
     * @var string
     */
    const SPA = 'SPA';

    /**
     * Spillway
     * 
     * A passage or outlet through which surplus water flows over, around or through a dam
     * 
     * @var string
     */
    const SPLY = 'SPLY';

    /**
     * Square
     * 
     * A broad, open, public area near the center of a town or city
     * 
     * @var string
     */
    const SQR = 'SQR';

    /**
     * Stable
     * 
     * A building for the shelter and feeding of farm animals, especially horses
     * 
     * @var string
     */
    const STBL = 'STBL';

    /**
     * Stadium
     * 
     * A structure with an enclosure for athletic games with tiers of seats for spectators
     * 
     * @var string
     */
    const STDM = 'STDM';

    /**
     * Scientific research base
     * 
     * A scientific facility used as a base from which research is carried out or monitored
     * 
     * @var string
     */
    const STNB = 'STNB';

    /**
     * Coast guard station
     * 
     * A facility from which the coast is guarded by armed vessels
     * 
     * @var string
     */
    const STNC = 'STNC';

    /**
     * Experiment station
     * 
     * A facility for carrying out experiments
     * 
     * @var string
     */
    const STNE = 'STNE';

    /**
     * Forest station
     * 
     * A collection of buildings and facilities for carrying out forest management
     * 
     * @var string
     */
    const STNF = 'STNF';

    /**
     * Inspection station
     * 
     * A station at which vehicles, goods, and people are inspected
     * 
     * @var string
     */
    const STNI = 'STNI';

    /**
     * Meteorological station
     * 
     * A station at which weather elements are recorded
     * 
     * @var string
     */
    const STNM = 'STNM';

    /**
     * Radio station
     * 
     * A facility for producing and transmitting information by radio waves
     * 
     * @var string
     */
    const STNR = 'STNR';

    /**
     * Satellite station
     * 
     * A facility for tracking and communicating with orbiting satellites
     * 
     * @var string
     */
    const STNS = 'STNS';

    /**
     * Whaling station
     * 
     * A facility for butchering whales and processing train oil
     * 
     * @var string
     */
    const STNW = 'STNW';

    /**
     * Steps
     * 
     * Stones or slabs placed for ease in ascending or descending a steep slope
     * 
     * @var string
     */
    const STPS = 'STPS';

    /**
     * Sewage treatment plant
     * 
     * Facility for the processing of sewage and/or wastewater
     * 
     * @var string
     */
    const SWT = 'SWT';

    /**
     * Theater
     * 
     * A building, room, or outdoor structure for the presentation of plays, films, or other dramatic performances
     * 
     * @var string
     */
    const THTR = 'THTR';

    /**
     * Tomb(s)
     * 
     * A structure for interring bodies
     * 
     * @var string
     */
    const TMB = 'TMB';

    /**
     * Temple(s)
     * 
     * An edifice dedicated to religious worship
     * 
     * @var string
     */
    const TMPL = 'TMPL';

    /**
     * Cattle dipping tank
     * 
     * A small artificial pond used for immersing cattle in chemically treated water for disease control
     * 
     * @var string
     */
    const TNKD = 'TNKD';

    /**
     * Tower
     * 
     * A high conspicuous structure, typically much higher than its diameter
     * 
     * @var string
     */
    const TOWR = 'TOWR';

    /**
     * Transit terminal
     * 
     * Facilities for the handling of vehicular freight and passengers
     * 
     * @var string
     */
    const TRANT = 'TRANT';

    /**
     * Triangulation station
     * 
     * A point on the earth whose position has been determined by triangulation
     * 
     * @var string
     */
    const TRIG = 'TRIG';

    /**
     * Oil pipeline terminal
     * 
     * A tank farm or loading facility at the end of an oil pipeline
     * 
     * @var string
     */
    const TRMO = 'TRMO';

    /**
     * Temp work office
     * 
     * Temporary Work Offices
     * 
     * @var string
     */
    const TWO = 'TWO';

    /**
     * University prep school
     * 
     * University Preparation Schools & Institutions
     * 
     * @var string
     */
    const UNIP = 'UNIP';

    /**
     * University
     * 
     * An institution for higher learning with teaching and research facilities constituting a graduate school and professional schools that award master's degrees and doctorates and an undergraduate division that awards bachelor's degrees.
     * 
     * @var string
     */
    const UNIV = 'UNIV';

    /**
     * United states government establishment
     * 
     * A facility operated by the United States Government in Panama
     * 
     * @var string
     */
    const USGE = 'USGE';

    /**
     * Veterinary facility
     * 
     * A building or camp at which veterinary services are available
     * 
     * @var string
     */
    const VETF = 'VETF';

    /**
     * Wall
     * 
     * A thick masonry structure, usually enclosing a field or building, or forming the side of a structure
     * 
     * @var string
     */
    const WALL = 'WALL';

    /**
     * Ancient wall
     * 
     * The remains of a linear defensive stone structure
     * 
     * @var string
     */
    const WALLA = 'WALLA';

    /**
     * Weir(s)
     * 
     * A small dam in a stream, designed to raise the water level or to divert stream flow through a desired channel
     * 
     * @var string
     */
    const WEIR = 'WEIR';

    /**
     * Wharf(-ves)
     * 
     * A structure of open rather than solid construction along a shore or a bank which provides berthing for ships and cargo-handling facilities
     * 
     * @var string
     */
    const WHRF = 'WHRF';

    /**
     * Wreck
     * 
     * The site of the remains of a wrecked vessel
     * 
     * @var string
     */
    const WRCK = 'WRCK';

    /**
     * Waterworks
     * 
     * A facility for supplying potable water through a water source and a system of pumps and filtration beds
     * 
     * @var string
     */
    const WTRW = 'WTRW';

    /**
     * Free trade zone
     * 
     * An area, usually a section of a port, where goods may be received and shipped free of customs duty and of most customs regulations
     * 
     * @var string
     */
    const ZNF = 'ZNF';

    /**
     * Zoo
     * 
     * A zoological garden or park where wild animals are kept for exhibition
     * 
     * @var string
     */
    const ZOO = 'ZOO';

    /**
     * Asphalt lake
     * 
     * A small basin containing naturally occurring asphalt
     * 
     * @var string
     */
    const ASPH = 'ASPH';

    /**
     * Atoll(s)
     * 
     * A ring-shaped coral reef which has closely spaced islands on it encircling a lagoon
     * 
     * @var string
     */
    const ATOL = 'ATOL';

    /**
     * Bar
     * 
     * A shallow ridge or mound of coarse unconsolidated material in a stream channel, at the mouth of a stream, estuary, or lagoon and in the wave-break zone along coasts
     * 
     * @var string
     */
    const BAR = 'BAR';

    /**
     * Beach
     * 
     * A shore zone of coarse unconsolidated sediment that extends from the low-water line to the highest reach of storm waves
     * 
     * @var string
     */
    const BCH = 'BCH';

    /**
     * Beaches
     * 
     * A shore zone of coarse unconsolidated sediment that extends from the low-water line to the highest reach of storm waves
     * 
     * @var string
     */
    const BCHS = 'BCHS';

    /**
     * Badlands
     * 
     * An area characterized by a maze of very closely spaced, deep, narrow, steep-sided ravines, and sharp crests and pinnacles
     * 
     * @var string
     */
    const BDLD = 'BDLD';

    /**
     * Boulder field
     * 
     * A high altitude or high latitude bare, flat area covered with large angular rocks
     * 
     * @var string
     */
    const BLDR = 'BLDR';

    /**
     * Blowhole(s)
     * 
     * A hole in coastal rock through which sea water is forced by a rising tide or waves and spurted through an outlet into the air
     * 
     * @var string
     */
    const BLHL = 'BLHL';

    /**
     * Blowout(s)
     * 
     * A small depression in sandy terrain, caused by wind erosion
     * 
     * @var string
     */
    const BLOW = 'BLOW';

    /**
     * Bench
     * 
     * A long, narrow bedrock platform bounded by steeper slopes above and below, usually overlooking a waterbody
     * 
     * @var string
     */
    const BNCH = 'BNCH';

    /**
     * Butte(s)
     * 
     * A small, isolated, usually flat-topped hill with steep sides
     * 
     * @var string
     */
    const BUTE = 'BUTE';

    /**
     * Cape
     * 
     * A land area, more prominent than a point, projecting into the sea and marking a notable change in coastal direction
     * 
     * @var string
     */
    const CAPE = 'CAPE';

    /**
     * Cleft(s)
     * 
     * A deep narrow slot, notch, or groove in a coastal cliff
     * 
     * @var string
     */
    const CFT = 'CFT';

    /**
     * Caldera
     * 
     * A depression measuring kilometers across formed by the collapse of a volcanic mountain
     * 
     * @var string
     */
    const CLDA = 'CLDA';

    /**
     * Cliff(s)
     * 
     * A high, steep to perpendicular slope overlooking a waterbody or lower area
     * 
     * @var string
     */
    const CLF = 'CLF';

    /**
     * Canyon
     * 
     * A deep, narrow valley with steep sides cutting into a plateau or mountainous area
     * 
     * @var string
     */
    const CNYN = 'CNYN';

    /**
     * Cone(s)
     * 
     * A conical landform composed of mud or volcanic material
     * 
     * @var string
     */
    const CONE = 'CONE';

    /**
     * Corridor
     * 
     * A strip or area of land having significance as an access way
     * 
     * @var string
     */
    const CRDR = 'CRDR';

    /**
     * Cirque
     * 
     * A bowl-like hollow partially surrounded by cliffs or steep slopes at the head of a glaciated valley
     * 
     * @var string
     */
    const CRQ = 'CRQ';

    /**
     * Cirques
     * 
     * Bowl-like hollows partially surrounded by cliffs or steep slopes at the head of a glaciated valley
     * 
     * @var string
     */
    const CRQS = 'CRQS';

    /**
     * Crater(s)
     * 
     * A generally circular saucer or bowl-shaped depression caused by volcanic or meteorite explosive action
     * 
     * @var string
     */
    const CRTR = 'CRTR';

    /**
     * Cuesta(s)
     * 
     * An asymmetric ridge formed on tilted strata
     * 
     * @var string
     */
    const CUET = 'CUET';

    /**
     * Delta
     * 
     * A flat plain formed by alluvial deposits at the mouth of a stream
     * 
     * @var string
     */
    const DLTA = 'DLTA';

    /**
     * Depression(s)
     * 
     * A low area surrounded by higher land and usually characterized by interior drainage
     * 
     * @var string
     */
    const DPR = 'DPR';

    /**
     * Desert
     * 
     * A large area with little or no vegetation due to extreme environmental conditions
     * 
     * @var string
     */
    const DSRT = 'DSRT';

    /**
     * Dune(s)
     * 
     * A wave form, ridge or star shape feature composed of sand
     * 
     * @var string
     */
    const DUNE = 'DUNE';

    /**
     * Divide
     * 
     * A line separating adjacent drainage basins
     * 
     * @var string
     */
    const DVD = 'DVD';

    /**
     * Sandy desert
     * 
     * An extensive tract of shifting sand and sand dunes
     * 
     * @var string
     */
    const ERG = 'ERG';

    /**
     * Fan(s)
     * 
     * A fan-shaped wedge of coarse alluvium with apex merging with a mountain stream bed and the fan spreading out at a low angle slope onto an adjacent plain
     * 
     * @var string
     */
    const FAN = 'FAN';

    /**
     * Ford
     * 
     * A shallow part of a stream which can be crossed on foot or by land vehicle
     * 
     * @var string
     */
    const FORD = 'FORD';

    /**
     * Fissure
     * 
     * A crack associated with volcanism
     * 
     * @var string
     */
    const FSR = 'FSR';

    /**
     * Gap
     * 
     * A low place in a ridge, not used for transportation
     * 
     * @var string
     */
    const GAP = 'GAP';

    /**
     * Gorge(s)
     * 
     * A short, narrow, steep-sided section of a stream valley
     * 
     * @var string
     */
    const GRGE = 'GRGE';

    /**
     * Headland
     * 
     * A high projection of land extending into a large body of water beyond the line of the coast
     * 
     * @var string
     */
    const HDLD = 'HDLD';

    /**
     * Hill
     * 
     * A rounded elevation of limited extent rising above the surrounding land with local relief of less than 300m
     * 
     * @var string
     */
    const HLL = 'HLL';

    /**
     * Hills
     * 
     * Rounded elevations of limited extent rising above the surrounding land with local relief of less than 300m
     * 
     * @var string
     */
    const HLLS = 'HLLS';

    /**
     * Hammock(s)
     * 
     * A patch of ground, distinct from and slightly above the surrounding plain or wetland. Often occurs in groups
     * 
     * @var string
     */
    const HMCK = 'HMCK';

    /**
     * Rock desert
     * 
     * A relatively sand-free, high bedrock plateau in a hot desert, with or without a gravel veneer
     * 
     * @var string
     */
    const HMDA = 'HMDA';

    /**
     * Interfluve
     * 
     * A relatively undissected upland between adjacent stream valleys
     * 
     * @var string
     */
    const INTF = 'INTF';

    /**
     * Island
     * 
     * A tract of land, smaller than a continent, surrounded by water at high water
     * 
     * @var string
     */
    const ISL = 'ISL';

    /**
     * Islet
     * 
     * Small island, bigger than rock, smaller than island.
     * 
     * @var string
     */
    const ISLET = 'ISLET';

    /**
     * Artificial island
     * 
     * An island created by landfill or diking and filling in a wetland, bay, or lagoon
     * 
     * @var string
     */
    const ISLF = 'ISLF';

    /**
     * Mangrove island
     * 
     * A mangrove swamp surrounded by a waterbody
     * 
     * @var string
     */
    const ISLM = 'ISLM';

    /**
     * Islands
     * 
     * Tracts of land, smaller than a continent, surrounded by water at high water
     * 
     * @var string
     */
    const ISLS = 'ISLS';

    /**
     * Land-tied island
     * 
     * A coastal island connected to the mainland by barrier beaches, levees or dikes
     * 
     * @var string
     */
    const ISLT = 'ISLT';

    /**
     * Section of island
     * 
     * @var string
     */
    const ISLX = 'ISLX';

    /**
     * Isthmus
     * 
     * A narrow strip of land connecting two larger land masses and bordered by water
     * 
     * @var string
     */
    const ISTH = 'ISTH';

    /**
     * Karst area
     * 
     * A distinctive landscape developed on soluble rock such as limestone characterized by sinkholes, caves, disappearing streams, and underground drainage
     * 
     * @var string
     */
    const KRST = 'KRST';

    /**
     * Lava area
     * 
     * An area of solidified lava
     * 
     * @var string
     */
    const LAVA = 'LAVA';

    /**
     * Levee
     * 
     * A natural low embankment bordering a distributary or meandering stream; often built up artificially to control floods
     * 
     * @var string
     */
    const LEV = 'LEV';

    /**
     * Mesa(s)
     * 
     * A flat-topped, isolated elevation with steep slopes on all sides, less extensive than a plateau
     * 
     * @var string
     */
    const MESA = 'MESA';

    /**
     * Mound(s)
     * 
     * A low, isolated, rounded hill
     * 
     * @var string
     */
    const MND = 'MND';

    /**
     * Moraine
     * 
     * A mound, ridge, or other accumulation of glacial till
     * 
     * @var string
     */
    const MRN = 'MRN';

    /**
     * Mountain
     * 
     * An elevation standing high above the surrounding area with small summit area, steep slopes and local relief of 300m or more
     * 
     * @var string
     */
    const MT = 'MT';

    /**
     * Mountains
     * 
     * A mountain range or a group of mountains or high ridges
     * 
     * @var string
     */
    const MTS = 'MTS';

    /**
     * Meander neck
     * 
     * A narrow strip of land between the two limbs of a meander loop at its narrowest point
     * 
     * @var string
     */
    const NKM = 'NKM';

    /**
     * Nunatak
     * 
     * A rock or mountain peak protruding through glacial ice
     * 
     * @var string
     */
    const NTK = 'NTK';

    /**
     * Nunataks
     * 
     * Rocks or mountain peaks protruding through glacial ice
     * 
     * @var string
     */
    const NTKS = 'NTKS';

    /**
     * Pan
     * 
     * A near-level shallow, natural depression or basin, usually containing an intermittent lake, pond, or pool
     * 
     * @var string
     */
    const PAN = 'PAN';

    /**
     * Pans
     * 
     * A near-level shallow, natural depression or basin, usually containing an intermittent lake, pond, or pool
     * 
     * @var string
     */
    const PANS = 'PANS';

    /**
     * Pass
     * 
     * A break in a mountain range or other high obstruction, used for transportation from one side to the other [See also gap]
     * 
     * @var string
     */
    const PASS = 'PASS';

    /**
     * Peninsula
     * 
     * An elongate area of land projecting into a body of water and nearly surrounded by water
     * 
     * @var string
     */
    const PEN = 'PEN';

    /**
     * Section of peninsula
     * 
     * @var string
     */
    const PENX = 'PENX';

    /**
     * Peak
     * 
     * A pointed elevation atop a mountain, ridge, or other hypsographic feature
     * 
     * @var string
     */
    const PK = 'PK';

    /**
     * Peaks
     * 
     * Pointed elevations atop a mountain, ridge, or other hypsographic features
     * 
     * @var string
     */
    const PKS = 'PKS';

    /**
     * Plateau
     * 
     * An elevated plain with steep slopes on one or more sides, and often with incised streams
     * 
     * @var string
     */
    const PLAT = 'PLAT';

    /**
     * Section of plateau
     * 
     * @var string
     */
    const PLATX = 'PLATX';

    /**
     * Polder
     * 
     * An area reclaimed from the sea by diking and draining
     * 
     * @var string
     */
    const PLDR = 'PLDR';

    /**
     * Plain(s)
     * 
     * An extensive area of comparatively level to gently undulating land, lacking surface irregularities, and usually adjacent to a higher area
     * 
     * @var string
     */
    const PLN = 'PLN';

    /**
     * Section of plain
     * 
     * @var string
     */
    const PLNX = 'PLNX';

    /**
     * Promontory(-ies)
     * 
     * A bluff or prominent hill overlooking or projecting into a lowland
     * 
     * @var string
     */
    const PROM = 'PROM';

    /**
     * Point
     * 
     * A tapering piece of land projecting into a body of water, less prominent than a cape
     * 
     * @var string
     */
    const PT = 'PT';

    /**
     * Points
     * 
     * Tapering pieces of land projecting into a body of water, less prominent than a cape
     * 
     * @var string
     */
    const PTS = 'PTS';

    /**
     * Beach ridge
     * 
     * A ridge of sand just inland and parallel to the beach, usually in series
     * 
     * @var string
     */
    const RDGB = 'RDGB';

    /**
     * Ridge(s)
     * 
     * A long narrow elevation with steep sides, and a more or less continuous crest
     * 
     * @var string
     */
    const RDGE = 'RDGE';

    /**
     * Stony desert
     * 
     * A desert plain characterized by a surface veneer of gravel and stones
     * 
     * @var string
     */
    const REG = 'REG';

    /**
     * Rock
     * 
     * A conspicuous, isolated rocky mass
     * 
     * @var string
     */
    const RK = 'RK';

    /**
     * Rockfall
     * 
     * An irregular mass of fallen rock at the base of a cliff or steep slope
     * 
     * @var string
     */
    const RKFL = 'RKFL';

    /**
     * Rocks
     * 
     * Conspicuous, isolated rocky masses
     * 
     * @var string
     */
    const RKS = 'RKS';

    /**
     * Sand area
     * 
     * A tract of land covered with sand
     * 
     * @var string
     */
    const SAND = 'SAND';

    /**
     * Dry stream bed
     * 
     * A channel formerly containing the water of a stream
     * 
     * @var string
     */
    const SBED = 'SBED';

    /**
     * Escarpment
     * 
     * A long line of cliffs or steep slopes separating level surfaces above and below
     * 
     * @var string
     */
    const SCRP = 'SCRP';

    /**
     * Saddle
     * 
     * A broad, open pass crossing a ridge or between hills or mountains
     * 
     * @var string
     */
    const SDL = 'SDL';

    /**
     * Shore
     * 
     * A narrow zone bordering a waterbody which covers and uncovers at high and low water, respectively
     * 
     * @var string
     */
    const SHOR = 'SHOR';

    /**
     * Sinkhole
     * 
     * A small crater-shape depression in a karst area
     * 
     * @var string
     */
    const SINK = 'SINK';

    /**
     * Slide
     * 
     * A mound of earth material, at the base of a slope and the associated scoured area
     * 
     * @var string
     */
    const SLID = 'SLID';

    /**
     * Slope(s)
     * 
     * A surface with a relatively uniform slope angle
     * 
     * @var string
     */
    const SLP = 'SLP';

    /**
     * Spit
     * 
     * A narrow, straight or curved continuation of a beach into a waterbody
     * 
     * @var string
     */
    const SPIT = 'SPIT';

    /**
     * Spur(s)
     * 
     * A subordinate ridge projecting outward from a hill, mountain or other elevation
     * 
     * @var string
     */
    const SPUR = 'SPUR';

    /**
     * Talus slope
     * 
     * A steep concave slope formed by an accumulation of loose rock fragments at the base of a cliff or steep slope
     * 
     * @var string
     */
    const TAL = 'TAL';

    /**
     * Interdune trough(s)
     * 
     * A long wind-swept trough between parallel longitudinal dunes
     * 
     * @var string
     */
    const TRGD = 'TRGD';

    /**
     * Terrace
     * 
     * A long, narrow alluvial platform bounded by steeper slopes above and below, usually overlooking a waterbody
     * 
     * @var string
     */
    const TRR = 'TRR';

    /**
     * Upland
     * 
     * An extensive interior region of high land with low to moderate surface relief
     * 
     * @var string
     */
    const UPLD = 'UPLD';

    /**
     * Valley
     * 
     * An elongated depression usually traversed by a stream
     * 
     * @var string
     */
    const VAL = 'VAL';

    /**
     * Hanging valley
     * 
     * A valley the floor of which is notably higher than the valley or shore to which it leads; most common in areas that have been glaciated
     * 
     * @var string
     */
    const VALG = 'VALG';

    /**
     * Valleys
     * 
     * Elongated depressions usually traversed by a stream
     * 
     * @var string
     */
    const VALS = 'VALS';

    /**
     * Section of valley
     * 
     * @var string
     */
    const VALX = 'VALX';

    /**
     * Volcano
     * 
     * A conical elevation composed of volcanic materials with a crater at the top
     * 
     * @var string
     */
    const VLC = 'VLC';

    /**
     * Apron
     * 
     * A gentle slope, with a generally smooth surface, particularly found around groups of islands and seamounts
     * 
     * @var string
     */
    const APNU = 'APNU';

    /**
     * Arch
     * 
     * A low bulge around the southeastern end of the island of Hawaii
     * 
     * @var string
     */
    const ARCU = 'ARCU';

    /**
     * Arrugado
     * 
     * An area of subdued corrugations off Baja California
     * 
     * @var string
     */
    const ARRU = 'ARRU';

    /**
     * Borderland
     * 
     * A region adjacent to a continent, normally occupied by or bordering a shelf, that is highly irregular with depths well in excess of those typical of a shelf
     * 
     * @var string
     */
    const BDLU = 'BDLU';

    /**
     * Banks
     * 
     * Elevations, typically located on a shelf, over which the depth of water is relatively shallow but sufficient for safe surface navigation
     * 
     * @var string
     */
    const BKSU = 'BKSU';

    /**
     * Bank
     * 
     * An elevation, typically located on a shelf, over which the depth of water is relatively shallow but sufficient for safe surface navigation
     * 
     * @var string
     */
    const BNKU = 'BNKU';

    /**
     * Basin
     * 
     * A depression more or less equidimensional in plan and of variable extent
     * 
     * @var string
     */
    const BSNU = 'BSNU';

    /**
     * Cordillera
     * 
     * An entire mountain system including the subordinate ranges, interior plateaus, and basins
     * 
     * @var string
     */
    const CDAU = 'CDAU';

    /**
     * Canyons
     * 
     * Relatively narrow, deep depressions with steep sides, the bottom of which generally has a continuous slope
     * 
     * @var string
     */
    const CNSU = 'CNSU';

    /**
     * Canyon
     * 
     * A relatively narrow, deep depression with steep sides, the bottom of which generally has a continuous slope
     * 
     * @var string
     */
    const CNYU = 'CNYU';

    /**
     * Continental rise
     * 
     * A gentle slope rising from oceanic depths towards the foot of a continental slope
     * 
     * @var string
     */
    const CRSU = 'CRSU';

    /**
     * Deep
     * 
     * A localized deep area within the confines of a larger feature, such as a trough, basin or trench
     * 
     * @var string
     */
    const DEPU = 'DEPU';

    /**
     * Shelf edge
     * 
     * A line along which there is a marked increase of slope at the outer margin of a continental shelf or island shelf
     * 
     * @var string
     */
    const EDGU = 'EDGU';

    /**
     * Escarpment (or scarp)
     * 
     * An elongated and comparatively steep slope separating flat or gently sloping areas
     * 
     * @var string
     */
    const ESCU = 'ESCU';

    /**
     * Fan
     * 
     * A relatively smooth feature normally sloping away from the lower termination of a canyon or canyon system
     * 
     * @var string
     */
    const FANU = 'FANU';

    /**
     * Flat
     * 
     * A small level or nearly level area
     * 
     * @var string
     */
    const FLTU = 'FLTU';

    /**
     * Fracture zone
     * 
     * An extensive linear zone of irregular topography of the sea floor, characterized by steep-sided or asymmetrical ridges, troughs, or escarpments
     * 
     * @var string
     */
    const FRZU = 'FRZU';

    /**
     * Furrow
     * 
     * A closed, linear, narrow, shallow depression
     * 
     * @var string
     */
    const FURU = 'FURU';

    /**
     * Gap
     * 
     * A narrow break in a ridge or rise
     * 
     * @var string
     */
    const GAPU = 'GAPU';

    /**
     * Gully
     * 
     * A small valley-like feature
     * 
     * @var string
     */
    const GLYU = 'GLYU';

    /**
     * Hill
     * 
     * An elevation rising generally less than 500 meters
     * 
     * @var string
     */
    const HLLU = 'HLLU';

    /**
     * Hills
     * 
     * Elevations rising generally less than 500 meters
     * 
     * @var string
     */
    const HLSU = 'HLSU';

    /**
     * Hole
     * 
     * A small depression of the sea floor
     * 
     * @var string
     */
    const HOLU = 'HOLU';

    /**
     * Knoll
     * 
     * An elevation rising generally more than 500 meters and less than 1,000 meters and of limited extent across the summit
     * 
     * @var string
     */
    const KNLU = 'KNLU';

    /**
     * Knolls
     * 
     * Elevations rising generally more than 500 meters and less than 1,000 meters and of limited extent across the summits
     * 
     * @var string
     */
    const KNSU = 'KNSU';

    /**
     * Ledge
     * 
     * A rocky projection or outcrop, commonly linear and near shore
     * 
     * @var string
     */
    const LDGU = 'LDGU';

    /**
     * Levee
     * 
     * An embankment bordering a canyon, valley, or seachannel
     * 
     * @var string
     */
    const LEVU = 'LEVU';

    /**
     * Mesa
     * 
     * An isolated, extensive, flat-topped elevation on the shelf, with relatively steep sides
     * 
     * @var string
     */
    const MESU = 'MESU';

    /**
     * Mound
     * 
     * A low, isolated, rounded hill
     * 
     * @var string
     */
    const MNDU = 'MNDU';

    /**
     * Moat
     * 
     * An annular depression that may not be continuous, located at the base of many seamounts, islands, and other isolated elevations
     * 
     * @var string
     */
    const MOTU = 'MOTU';

    /**
     * Mountain
     * 
     * A well-delineated subdivision of a large and complex positive feature
     * 
     * @var string
     */
    const MTU = 'MTU';

    /**
     * Peaks
     * 
     * Prominent elevations, part of a larger feature, either pointed or of very limited extent across the summit
     * 
     * @var string
     */
    const PKSU = 'PKSU';

    /**
     * Peak
     * 
     * A prominent elevation, part of a larger feature, either pointed or of very limited extent across the summit
     * 
     * @var string
     */
    const PKU = 'PKU';

    /**
     * Plain
     * 
     * A flat, gently sloping or nearly level region
     * 
     * @var string
     */
    const PLNU = 'PLNU';

    /**
     * Plateau
     * 
     * A comparatively flat-topped feature of considerable extent, dropping off abruptly on one or more sides
     * 
     * @var string
     */
    const PLTU = 'PLTU';

    /**
     * Pinnacle
     * 
     * A high tower or spire-shaped pillar of rock or coral, alone or cresting a summit
     * 
     * @var string
     */
    const PNLU = 'PNLU';

    /**
     * Province
     * 
     * A region identifiable by a group of similar physiographic features whose characteristics are markedly in contrast with surrounding areas
     * 
     * @var string
     */
    const PRVU = 'PRVU';

    /**
     * Ridge
     * 
     * A long narrow elevation with steep sides
     * 
     * @var string
     */
    const RDGU = 'RDGU';

    /**
     * Ridges
     * 
     * Long narrow elevations with steep sides
     * 
     * @var string
     */
    const RDSU = 'RDSU';

    /**
     * Reefs
     * 
     * Surface-navigation hazards composed of consolidated material
     * 
     * @var string
     */
    const RFSU = 'RFSU';

    /**
     * Reef
     * 
     * A surface-navigation hazard composed of consolidated material
     * 
     * @var string
     */
    const RFU = 'RFU';

    /**
     * Rise
     * 
     * A broad elevation that rises gently, and generally smoothly, from the sea floor
     * 
     * @var string
     */
    const RISU = 'RISU';

    /**
     * Seachannel
     * 
     * A continuously sloping, elongated depression commonly found in fans or plains and customarily bordered by levees on one or two sides
     * 
     * @var string
     */
    const SCNU = 'SCNU';

    /**
     * Seachannels
     * 
     * Continuously sloping, elongated depressions commonly found in fans or plains and customarily bordered by levees on one or two sides
     * 
     * @var string
     */
    const SCSU = 'SCSU';

    /**
     * Saddle
     * 
     * A low part, resembling in shape a saddle, in a ridge or between contiguous seamounts
     * 
     * @var string
     */
    const SDLU = 'SDLU';

    /**
     * Shelf
     * 
     * A zone adjacent to a continent (or around an island) that extends from the low water line to a depth at which there is usually a marked increase of slope towards oceanic depths
     * 
     * @var string
     */
    const SHFU = 'SHFU';

    /**
     * Shoal
     * 
     * A surface-navigation hazard composed of unconsolidated material
     * 
     * @var string
     */
    const SHLU = 'SHLU';

    /**
     * Shoals
     * 
     * Hazards to surface navigation composed of unconsolidated material
     * 
     * @var string
     */
    const SHSU = 'SHSU';

    /**
     * Shelf valley
     * 
     * A valley on the shelf, generally the shoreward extension of a canyon
     * 
     * @var string
     */
    const SHVU = 'SHVU';

    /**
     * Sill
     * 
     * The low part of a gap or saddle separating basins
     * 
     * @var string
     */
    const SILU = 'SILU';

    /**
     * Slope
     * 
     * The slope seaward from the shelf edge to the beginning of a continental rise or the point where there is a general reduction in slope
     * 
     * @var string
     */
    const SLPU = 'SLPU';

    /**
     * Seamounts
     * 
     * Elevations rising generally more than 1,000 meters and of limited extent across the summit
     * 
     * @var string
     */
    const SMSU = 'SMSU';

    /**
     * Seamount
     * 
     * An elevation rising generally more than 1,000 meters and of limited extent across the summit
     * 
     * @var string
     */
    const SMU = 'SMU';

    /**
     * Spur
     * 
     * A subordinate elevation, ridge, or rise projecting outward from a larger feature
     * 
     * @var string
     */
    const SPRU = 'SPRU';

    /**
     * Terrace
     * 
     * A relatively flat horizontal or gently inclined surface, sometimes long and narrow, which is bounded by a steeper ascending slope on one side and by a steep descending slope on the opposite side
     * 
     * @var string
     */
    const TERU = 'TERU';

    /**
     * Tablemounts (or guyots)
     * 
     * Seamounts having a comparatively smooth, flat top
     * 
     * @var string
     */
    const TMSU = 'TMSU';

    /**
     * Tablemount (or guyot)
     * 
     * A seamount having a comparatively smooth, flat top
     * 
     * @var string
     */
    const TMTU = 'TMTU';

    /**
     * Tongue
     * 
     * An elongate (tongue-like) extension of a flat sea floor into an adjacent higher feature
     * 
     * @var string
     */
    const TNGU = 'TNGU';

    /**
     * Trough
     * 
     * A long depression of the sea floor characteristically flat bottomed and steep sided, and normally shallower than a trench
     * 
     * @var string
     */
    const TRGU = 'TRGU';

    /**
     * Trench
     * 
     * A long, narrow, characteristically very deep and asymmetrical depression of the sea floor, with relatively steep sides
     * 
     * @var string
     */
    const TRNU = 'TRNU';

    /**
     * Valley
     * 
     * A relatively shallow, wide depression, the bottom of which usually has a continuous gradient
     * 
     * @var string
     */
    const VALU = 'VALU';

    /**
     * Valleys
     * 
     * A relatively shallow, wide depression, the bottom of which usually has a continuous gradient
     * 
     * @var string
     */
    const VLSU = 'VLSU';

    /**
     * Bush(es)
     * 
     * A small clump of conspicuous bushes in an otherwise bare area
     * 
     * @var string
     */
    const BUSH = 'BUSH';

    /**
     * Cultivated area
     * 
     * An area under cultivation
     * 
     * @var string
     */
    const CULT = 'CULT';

    /**
     * Forest(s)
     * 
     * An area dominated by tree vegetation
     * 
     * @var string
     */
    const FRST = 'FRST';

    /**
     * Fossilized forest
     * 
     * A forest fossilized by geologic processes and now exposed at the earth's surface
     * 
     * @var string
     */
    const FRSTF = 'FRSTF';

    /**
     * Grassland
     * 
     * An area dominated by grass vegetation
     * 
     * @var string
     */
    const GRSLD = 'GRSLD';

    /**
     * Coconut grove
     * 
     * A planting of coconut trees
     * 
     * @var string
     */
    const GRVC = 'GRVC';

    /**
     * Olive grove
     * 
     * A planting of olive trees
     * 
     * @var string
     */
    const GRVO = 'GRVO';

    /**
     * Palm grove
     * 
     * A planting of palm trees
     * 
     * @var string
     */
    const GRVP = 'GRVP';

    /**
     * Pine grove
     * 
     * A planting of pine trees
     * 
     * @var string
     */
    const GRVPN = 'GRVPN';

    /**
     * Heath
     * 
     * An upland moor or sandy area dominated by low shrubby vegetation including heather
     * 
     * @var string
     */
    const HTH = 'HTH';

    /**
     * Meadow
     * 
     * A small, poorly drained area dominated by grassy vegetation
     * 
     * @var string
     */
    const MDW = 'MDW';

    /**
     * Orchard(s)
     * 
     * A planting of fruit or nut trees
     * 
     * @var string
     */
    const OCH = 'OCH';

    /**
     * Scrubland
     * 
     * An area of low trees, bushes, and shrubs stunted by some environmental limitation
     * 
     * @var string
     */
    const SCRB = 'SCRB';

    /**
     * Tree(s)
     * 
     * A conspicuous tree used as a landmark
     * 
     * @var string
     */
    const TREE = 'TREE';

    /**
     * Tundra
     * 
     * A marshy, treeless, high latitude plain, dominated by mosses, lichens, and low shrub vegetation under permafrost conditions
     * 
     * @var string
     */
    const TUND = 'TUND';

    /**
     * Vineyard
     * 
     * A planting of grapevines
     * 
     * @var string
     */
    const VIN = 'VIN';

    /**
     * Vineyards
     * 
     * Plantings of grapevines
     * 
     * @var string
     */
    const VINS = 'VINS';

    /**
     * Not available
     * 
     * @var string
     */
    const LL = 'll';
}
