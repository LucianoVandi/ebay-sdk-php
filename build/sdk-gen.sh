#!/bin/bash

: '
https://developer.ebay.com/webservices/bulk-data-exchange/latest/BulkDataExchangeService.wsdl
https://developer.ebay.com/webservices/business-policies/latest/SellerProfilesManagementService.wsdl
https://developer.ebay.com/webservices/file-transfer/latest/FileTransferService.wsdl
https://developer.ebay.com/webservices/Finding/latest/FindingService.wsdl
https://developer.ebay.com/webservices/half-finding/latest/HalfFindingService.wsdl
https://developer.ebay.com/webservices/merchandising/latest/MerchandisingService.wsdl 
https://developer.ebay.com/webservices/latest/merchantdataservice.xsd
https://developer.ebay.com/webservices/product/latest/ProductService.wsdl
https://developer.ebay.com/webservices/product-metadata/latest/ProductMetadataService.wsdl
https://developer.ebay.com/webservices/resolution-case-management/latest/ResolutionCaseManagementService.wsdl
https://developer.ebay.com/webservices/return-management/latest/ReturnManagementService.wsdl
https://developer.ebay.com/webservices/latest/ShoppingService.wsdl
https://developer.ebay.com/webservices/latest/ebaysvc.wsdl
'

SAXON_BIN=~/Downloads/SaxonHE10-3J/saxon-he-10.3.jar
XSL_PATH=./xsl/sdk.xsl
WSDL_PATH=./wsdl
OUTPUT_PATH=../

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/ebaysvc.wsdl \
    service=Trading \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/BulkDataExchangeService.wsdl \
    service=BulkDataExchange \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/SellerProfilesManagementService.wsdl \
    service=BusinessPoliciesManagement \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/FileTransferService.wsdl \
    service=FileTransfer \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/FindingService.wsdl \
    service=Finding \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/HalfFindingService.wsdl \
    service=HalfFinding \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/MerchandisingService.wsdl \
    service=Merchandising \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/merchantdataservice.xsd \
    service=MerchantData \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/ProductService.wsdl \
    service=Product \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/ProductMetadataService.wsdl \
    service=ProductMetadata \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/ResolutionCaseManagementService.wsdl \
    service=ResolutionCaseManagement \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/ReturnManagementService.wsdl \
    service=ReturnManagement \
    destDirectory=$OUTPUT_PATH

java -jar $SAXON_BIN \
    -xsl:$XSL_PATH \
    -s:$WSDL_PATH/ShoppingService.wsdl \
    service=Shopping \
    destDirectory=$OUTPUT_PATH