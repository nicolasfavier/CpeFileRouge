<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE xsl:stylesheet SYSTEM "xhtml-math11-f.dtd">
<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
xmlns:xs="http://www.w3.org/2001/XMLSchema">

<xsl:output 
  method="html"
  encoding="UTF-8"
  doctype-public="-//W3C//DTD XHTML 1.1 plus MathML 2.0//EN"
  doctype-system="xhtml-math11-f.dtd"
  indent="yes" 
  standalone="no"
  omit-xml-declaration="yes"
  escape-uri-attributes="yes" />

<xsl:template match="/">
	<html><body><h1>Pathologie Detail</h1>
	<xsl:apply-templates select="*|text()|processing-instruction()" />
	</body></html>
</xsl:template>

<xsl:template match="pathologie">
	Votre pathologie est : <xsl:value-of select="nom"/> de type <xsl:value-of select="type"/>
		<xsl:apply-templates select="meridien" />
		<xsl:apply-templates select="ListSymptomes" />
</xsl:template>

<xsl:template match="meridien">
	Le meridien est : <xsl:value-of select="nom"/>
	<xsl:apply-templates select="yin" />
</xsl:template>

<xsl:template match="ListSymptomes">
	Les symptomes de cette pathologie sont : 
	<ul>
		<xsl:apply-templates select="*|text()|processing-instruction()" />
	</ul>
</xsl:template>

<xsl:template match="symptome">
	<li>
		<xsl:value-of select="desc"/>
	</li>
</xsl:template>

<xsl:template match="yin">
	il sagit d'un type : <xsl:value-of select="if (.=1) then 'yin' else 'yang'"/>
</xsl:template>

</xsl:stylesheet>
  
